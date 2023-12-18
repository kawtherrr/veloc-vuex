<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="/images/volant-yw.svg" type="image/x-icon">
        

        <title>{{ $page_title }}</title>
        <style>
            header{
                background: url(/images/bg-fixed.svg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
        }
        </style>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="app">            
        
        @yield('content')
        </div>

        @vite('resources/js/app.js')
    </body>
</html>