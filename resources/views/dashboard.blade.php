<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="row bg-white">
        <div class="col-sm-3 p-5">
            <img src="/assets/svg/instagram-logo.svg" alt="profile_img" class=" rounded-circle">
        </div>
        <div class="col-sm-9 p-5">
           <div><h1 class="text-2xl"><strong>{{Auth::user()->username}}</strong></h1></div>
           <div class="d-flex pb-5">
                <div class="pr-5"><strong>153K </strong>posts </div>
                <div class="pr-5"><strong>23.5k </strong> followers </div>
                <div class="pr-5"><strong>257</strong> following </div>
           </div>
           <div>
                <h5><strong>Prime Coder</strong></h5>
                <small>I'm a skilled software developer with backend and front-end skills. Let's connect and do amazinf stuffs. </small>
                <div><a href="#">www.primecoder.org</a></div>
           </div>
        </div>
    </div>

    <div class="row bg-white p-3">
        <div class="col-sm-4 pr-2">
            <img src="https://images.pexels.com/photos/3762940/pexels-photo-3762940.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-100">
        </div>
        <div class="col-sm-4 pr-2">
            <img src="https://images.pexels.com/photos/4050347/pexels-photo-4050347.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-100">
        </div>
        <div class="col-sm-4 pr-2">
            <img src="https://images.pexels.com/photos/3768894/pexels-photo-3768894.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="w-100">
        </div>
    </div>

   
</x-app-layout>
