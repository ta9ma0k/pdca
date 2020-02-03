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
            <a class="my-navbar-item" href="#">サインイン</a>
            ｜
            <a class="my-navbar-item" href="#">サインアップ</a>
        </div>
    </nav>
</header>
@yield('content')
</body>
</html>