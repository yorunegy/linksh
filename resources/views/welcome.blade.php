<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>上海プログラミング教室LINK</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header-logo">
                <img src="logo.webp">
            </div>
            <div class="header-menus">
                <li>ホーム</li>
                <li>コース</li>
                <li>開催日時</li>
                <li>講師</li>
                <li>レッスン料</li>
                <li>よくある質問</li>
            </div>
        </header>
        <main></main>
        <footer></footer>
    </body>
</html>
