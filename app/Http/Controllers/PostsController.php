<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Require authentication to access 
     */
    public function __constructor()
    {
        $this->middlware("auth");
    }
    /**
     * 
     * Fetch the create post page
     */

     public function create(Request $request): View
     {
        return view('posts.create',[]);
     }

     /**
      * store new post
      */

      public function store(Request $request){
        $data = $request->validate(
            [
                'caption'=>'required',
                'image'=>['required','image'],
            ]);
       $imagePath  = $data['image']->store('uploads','public');
            auth()->user()->posts()->create([
                'caption'=>$data['caption'],
                'image'=>$imagePath,
            ]);

        return redirect('/profile/'.auth()->user()->id);
      }
}
