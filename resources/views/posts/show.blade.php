@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row bg-white">
        <div class="col-7 p-3">
           <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-5 p-3">
            <h3 class="text-2xl">{{$post->user->username}}</h3>
            <p>{{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection