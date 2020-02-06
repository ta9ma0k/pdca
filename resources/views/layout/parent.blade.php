<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDCA</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <nav class="my-navbar">
        <a href="/" class="my-navbar-brand">PDCA</a>
        <div class="my-navbar-control">
            @if(Auth::check())
                <span class="my-navbar-item">{{ Auth::user()->name }}</span>
                |
                <a href="#" id="logout" class="my-navbar-item">サインアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a class="my-navbar-item" href="{{ route('login') }}">サインイン</a>
                ｜
                <a class="my-navbar-item" href="#">サインアップ</a>
            @endif
        </div>
    </nav>
</header>
@yield('content')

@if(Auth::check())
    <script>
        document.getElementById('logout').addEventListener('click', function (event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        });
    </script>
@endif
</body>
</html>