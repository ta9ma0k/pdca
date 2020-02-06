@extends('layout.parent')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <h1 class="title">PDCA<br>Reporter</h1>
                <a href="{{ route('login') }}" class="h4">サインイン</a>
                <a href="{{ route('register') }}" class="h4">サインアップ</a>
            </div>
        </div>
    </div>
@endsection
