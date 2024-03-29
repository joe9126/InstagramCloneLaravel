<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile .
     */
    public function index(User $user){
      // $user  = User::findOrFail($user);
    
        return view('profile.index', compact('user') );
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request):View
    {
        $this->authorize('update',$user->profile);
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function profedit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profile.edit', compact('user') );
    }


    /**
     * Update the user's profile information.
     */
    public function update(User $user): RedirectResponse
    {
        $this->authorize('update',$user->profile);
        
        $data = request()->validate(
            [
                'title'=>['required'],
                'description'=>['required'],
                'url'=>['url'],
                'image'=>['']
            ]);
          
       auth()->user()->profile->update($data);

      return Redirect::route('profile.show',$user->id)->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
