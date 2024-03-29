<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid"> 
                <div class="navbar-nav">
                    <a class="nav-link" href="/">home</a>
                    <a class="nav-link" href="/about">about</a>
                    <a class="nav-link" href="{{ route('articles.index') }}">articles</a>
                    <a class="nav-link" href="{{ route('articles.create') }}">create</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>