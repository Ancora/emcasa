<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EmCasa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastre-se</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/images/logoEmCasa0400x130.png" class="img-fluid" alt="">
                    </a>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>
    </body>
</html>
