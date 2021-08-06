<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('splide/dist/css/splide.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        @livewireStyles
        <link rel="stylesheet" href="{{asset('css/init.css')}}">
        <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
        <script src="{{asset('js/x.app.js')}}"></script>
    </head>
    <body class="overflow-x-hidden antialiased" x-data="X_app()">
        {{-- Lien --}}
        @yield('content')
        <button class="fixed px-5 py-4 text-lg font-bold text-white transition duration-300 transform bg-gray-900 right-5 bottom-10 hover:opacity-25" id="scrolleur" @click="scrolTop()">
            <i class="fa fa-chevron-up"></i>
        </button>
        @livewireScripts
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/alpine/alpine_cdn.min.js')}}"></script>
        {{-- <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script> --}}
        <script src="{{asset('splide/dist/js/splide.min.js')}}"></script>
        <script src="{{asset('js/init.js')}}"></script>
        <script src="{{asset('js/admin.js')}}"></script>
    </body>
</html>
