@extends('layouts.gw2rol')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('content')
    <h1 class="text-center">Menu</h1>
    <div class="row menu">
        <div class="col-sm-6 col-md-6 col-lg-6 text-center mt-5 new_sheet">
            <a href="/new-sheet">Crear ficha</a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 text-center mt-5 sheets">
            <a href="/sheets">Ver fichas</a>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/menu.js') }}"></script>
@endsection
