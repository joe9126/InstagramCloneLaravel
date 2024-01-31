@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 p-6 d-flex justify-content-center" >
            <div class="card p-2" style="width: 40rem">
                 
                    <h1 class="card-title text-2xl text-center"><strong>Add New Post</strong></h1>
                 
                <div class="card-body p-6">
                    <form method="POST" action="/p" enctype="multipart/form-data">
                        @csrf
                
                        <!-- Post Caption -->
                        <div>
                            <x-input-label for="caption" :value="__('Post Caption')" />
                            <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')"  autofocus autocomplete="caption" />
                            <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                        </div>
                
                         <!-- Image -->
                         <div class="mt-4">
                            <x-input-label for="image" :value="__('Image')" />
                            <input id="image" class="block mt-1 w-full form-control-file"  
                                type="file" 
                                name="image" :value="old('image')"  
                                autofocus autocomplete="image"
                                accept = "image/png, image/jpeg, image/gif"
                             />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                    
                        <div class="row justify-content-center  pt-4">
                            <div class="col-sm-6 d-flex justify-content-center">
                                <button class="btn w-100 btn-primary">Create Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection