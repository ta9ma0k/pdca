@extends('layout.parent')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">フォルダ</div>
                    <div class="panel-body">
                        <a href="#" class="btn btn-default btn-block">
                            レポートを作成する
                        </a>
                    </div>
                    <div class="list-group">
                        @foreach($reports as $report)
                            <a href="#" class="list-group-item">{{ $report->formatDate() }}</a>
                        @endforeach
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection