<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>-->

    <div class="row">
        <div class="col-sm-3 bg-primary">
            <img src="/assets/svg/instagram-logo.svg" alt="profile_img" class="h-9">
        </div>
        <div class="col-sm-9">
            <p>some text</p>
        </div>
    </div>

   
</x-app-layout>
