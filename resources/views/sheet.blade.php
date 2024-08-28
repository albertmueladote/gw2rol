@extends('layouts.gw2rol')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/sheet.css') }}">
@endsection

@section('content')
        @include('partials.tabs')
        <div id="sheet" class="sheet">
            @include('partials.personalData')
            @include('partials.personality')
            @include('partials.skills')
            @include('partials.characteristics')
            @include('partials.equipment')
            @include('partials.knowledge')
            @include('partials.items')
        </div>
        <div id="traits" class="traits">
            @include('partials.traits')
        </div>
        <div id="guild" class="guild">
            @include('partials.guild')
        </div>
@endsection

@section('js')
    <script src="{{ asset('js/sheet.js') }}"></script>
@endsection
