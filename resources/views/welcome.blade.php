<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="https://images.vexels.com/media/users/3/157297/isolated/preview/e30a80459d7b3a07c2a659c32437acf7-icono-de-marketing-de-computadora.png" width="280">
                      <h1 class="text-white">𝐓𝐞𝐜𝐧𝐨𝐂𝐨𝐦𝐩𝐨𝐧𝐞𝐧𝐭</h1>
                <div class="title m-b-md">
                 
                </div>
            
                <div class="links">
                    <a href="https://laravel.com/docs"></a>
                    <a href="https://laracasts.com"></a>
                    <a href="https://laravel-news.com"></a>
                    <a href="https://blog.laravel.com"></a>
                    <a href="https://nova.laravel.com"></a>
                    <a href="https://forge.laravel.com"></a>
                    <a href="https://vapor.laravel.com"></a>
                    <a href="https://github.com/laravel/laravel"></a>
                </div>
            </div>
        </div>
    </body>
</html>
