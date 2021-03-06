<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel</title>

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=nunito:200,600" rel="stylesheet">

        <!-- styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'nunito', sans-serif;
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
            @if (route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">home</a>
                    @else
                        <a href="{{ route('login') }}">login</a>

                        @if (route::has('register'))
                            <a href="{{ route('register') }}">register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    laravela
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">docs</a>
                    <a href="https://laracasts.com">laracasts</a>
                    <a href="https://laravel-news.com">news</a>
                    <a href="https://blog.laravel.com">blog</a>
                    <a href="https://nova.laravel.com">nova</a>
                    <a href="https://forge.laravel.com">forge</a>
                    <a href="https://vapor.laravel.com">vapor</a>
                    <a href="https://github.com/laravel/laravel">github</a>
                </div>
            </div>
        </div>
    </body>
</html>
