@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pb-3">
       
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row bg-white">
                        <div class="col-sm-3 p-5">
                            <img src="/assets/svg/instagram-logo.svg" alt="profile_img" class=" rounded-circle">
                        </div>
                        <div class="col-sm-9 p-5">
                           <div class="d-flex justify-content-between align-items-baseline">
                                <h1 class="text-2xl"><strong>{{$user->username}}</strong></h1>
                                <a href="/p/create">Add New Post</a>
                            </div>
                            <a href="/prof/{{$user->id}}/edit">Edit Profile</a>
                            
                           <div class="d-flex pb-5">
                                <div class="pr-5"><strong>{{$user->posts->count()}} </strong>posts </div>
                                <div class="pr-5"><strong>23.5k </strong> followers </div>
                                <div class="pr-5"><strong>257</strong> following </div>
                           </div>
                           <div>
                                <h5><strong>{{$user->profile->title}}</strong></h5>
                                <small>{{$user->profile->description}} </small>
                                <div><a href="#">{{$user->profile->url}}</a></div>
                           </div>
                        </div>
                    </div>
                
                    <div class="row bg-white p-4">
                       @foreach($user->posts as $post)
                        <div class="col-sm-4 p-2" >
                            <a href="/p/{{$post->id}}">
                                <img src="/storage/{{$post->image}}" alt="" class="w-100">
                            </a>
                           
                         </div>
                       @endforeach
                        
                    </div>                

        </div>
</div>
@endsection
