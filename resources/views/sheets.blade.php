@extends('layouts.gw2rol')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/sheets.css') }}">
@endsection

@section('content')
    <div class="row mt-5">
        @foreach($sheets AS $sheet)
            <div><a href="/sheet/{{$sheet->id}}">{{$sheet->name}} - {{$sheet->race->name}} - {{$sheet->rol->name}} - Nivel {{$sheet->level}}</a></div>
        @endforeach
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/sheets.js') }}"></script>
@endsection
