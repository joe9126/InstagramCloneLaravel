<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use Intervention\Image\Facades\Image;

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
       $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200); //cut the image to the specified dimensions
       $image->save(); 
       auth()->user()->posts()->create([
                'caption'=>$data['caption'],
                'image'=>$imagePath,
            ]);

        return redirect('/profile/'.auth()->user()->id);
      }
}
