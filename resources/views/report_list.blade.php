@extends('layout.parent')

@section('content')

    <ul>
    @foreach($reports as $report)
        <li>{{ $report->date }}</li>
    @endforeach
    </ul>
@endsection