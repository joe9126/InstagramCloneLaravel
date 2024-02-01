@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="row d-flex justify-content-center">
            <div class="col-12 bg-white p-6">
                <div class="card p-6">
                    <h1 class="card-title text-2xl">Edit Profile</h1>
                    <div class="card-body">
                        <form method="POST" action="/profile/{{ $user->id }}/edit">
                            @csrf
                    
                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                    
                             <!-- User Name -->
                             <div class="mt-4">
                                <x-input-label for="username" :value="__('Username')" />
                                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </form>    
                    </div>
                </div>
                
            </div>
       </div>
    </div>
@endsection