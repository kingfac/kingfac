<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="">
        <div class="flex flex-col items-center justify-center min-h-screen p-32 text-center lg:p-64">
            <div class="grid gap-4 grig-cols-1 lg:grid-cols-2 lg:min-w-max">
                <div class="flex items-center justify-center text-center bg-indigo-700">
                    <h1 class="block w-full py-20 text-4xl font-bold text-white transform skew-x-12 bg-indigo-600 lg:text-8xl">404</h1>
                </div>
                <div class="flex items-center justify-center px-4 text-center">
                    <h1 class="text-xl font-bold text-gray-600 lg:text-8xl md:text-sm">OUPS !</h1>
                </div>
            </div>
            <div class="flex flex-col p-4">
                <p class="mt-10 text-gray-600 lg:font-bold lg:text-lg">Le token d'accès à la partie administrative est incorrect, <b class="text-indigo-600">Page inaccessible</b></p>
                <p class="mt-2 lg:mt-0 animate-bounce">
                    <a class="text-lg font-bold text-indigo-700 " href="{{route('client')}}">Retour à la page d'accueil</a>
                </p>
            </div>
        </div>
        
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/alpine/alpine_cdn.min.js')}}"></script>
        <script src="{{asset('js/init.js')}}"></script>
    </body>
</html>
