<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/swiper/swiper-bundle.min.css')}}">
        @livewireStyles
        
    </head>
    <body class="antialiased">
        <p>llldl</p>
        @yield('client')
        @livewireScripts
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/alpine/alpine_cdn.min.js')}}"></script>
        <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('js/init.js')}}"></script>
    </body>
</html>
