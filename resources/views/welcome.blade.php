<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style> </style>
         <!-- Script -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
         @vite(['resources/css/app.css','resources/css/styles.css', 'resources/js/app.js', 'resources/sass/app.scss'])
    </head>
    <body class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class=" navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                  <div class="nav-link shrink-0 flex items-center pt-4">
                    <a href="{{ route('welcome') }}">
                        <!--<x-application-logo class="block h-9 w-auto fill-current text-gray-800" />-->
                        <div class="flex">
                            <img src="/assets/svg/instagram-logo.svg" alt="applog" class="block h-7 w-auto fill-current text-gray-600 pr-3" style="border-right:1px solid #333"> 
                           
                            <img src="/assets/svg/instagram-1.svg" alt="appname" class="block h-8 w-auto fill-current text-gray-800 pl-3">
                        </div>
                       
                    </a>
                </div>
               </div>
              </div>
              <div class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    <div class=" sm:top-0 sm:right-0 p-4 text-right">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-900 hover:text-gray-1000 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-blue focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            </div>
          </nav>
      
        
    </body>
</html>
