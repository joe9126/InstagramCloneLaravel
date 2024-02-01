@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="row d-flex justify-content-center">
            <div class="col-12 bg-white p-6">
                <div class="card p-6">
                    <h1 class="card-title text-2xl">Edit Profile</h1>
                    <div class="card-body">
                        <form method="POST" action="/profile/{{ $user->id }}">
                            @csrf
                            @method('PATCH')
                    
                             <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input 
                                    id="title" 
                                    class="block mt-1 w-full" 
                                    type="text" name="title" :value="old('title') ?? $user->profile->title"  autofocus 
                                    autocomplete="title" 
                                />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                    
                             <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea
                                    rows="3"
                                    id="description" 
                                    class="block mt-1 w-full form-control" 
                                    type="textarea" 
                                    name="description" 
                                     autofocus 
                                    autocomplete="description" >{{old('description') ?? $user->profile->description}}
                               </textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            
                            <div class="mt-4">
                                <x-input-label for="url" :value="__('URL')" />
                                <x-text-input 
                                    id="url" 
                                    class="block mt-1 w-full"
                                    type="url" name="url" 
                                    :value="old('url') ?? $user->profile->url"  autocomplete="url" />
                                <x-input-error :messages="$errors->get('url')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="image" :value="__('Profile Image')" />
                                <input id="image" class="block mt-1 w-full form-control-file"  
                                    type="file" 
                                    name="image" :value="old('image')"  
                                    autofocus autocomplete="image"
                                    accept = "image/png, image/jpeg, image/gif"
                                 />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-6">
                                    <button class="btn btn-primary w-100"> Save Profile</button>
                                </div>
                               
                            </div>
                        </form>    
                    </div>
                </div>
                
            </div>
       </div>
    </div>
@endsection