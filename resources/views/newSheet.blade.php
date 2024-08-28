@extends('layouts.gw2rol')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/newSheet.css') }}">
@endsection

@section('content')
    <div class="row tabs">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="tabs">
                <button class="tab-link tab-link-1" data-id="1">Raza</button>
                <button class="tab-link tab-link-2" data-id="2">Género</button>
                <button class="tab-link tab-link-3" data-id="3">Clase</button>
                <button class="tab-link tab-link-4" data-id="4">Biografía</button>
                <button class="tab-link tab-link-5" data-id="5">Firma</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
           <div id="tab1" class="tab-content text-center" style="display:block;">
                <div class="image"></div>
                <form>
                   <select id="race" name="race">
                        <option value="">-Selecciona raza-</option>
                        @foreach ($races AS $race)
                            <option value="{{$race->id}}">{{$race->name}}</option>
                        @endforeach
                    </select>
                </form>
            </div>

            <div id="tab2" class="tab-content text-center">
                <div class="image"></div>
                <form>
                    <input type="radio" id="male" name="gender" value="1">
                    <label for="male">Hombre</label><br>
                    <input type="radio" id="female" name="gender" value="CSS">
                    <label for="female">Mujer</label><br>
                </form>
            </div>

            <div id="tab3" class="tab-content text-center">
                <div class="image"></div>
                <form>
                    <select id="rol" name="rol">
                        <option value="">-Selecciona clase-</option>
                        @foreach ($roles AS $rol)
                            <option value="{{$rol->id}}">{{$rol->name}}</option>
                        @endforeach
                    </select>
                </form>
            </div>

            <div id="tab4" class="tab-content">
                <div class="image"></div>
                <form>
                    <div class="question-up text-center">Arriba</div>
                    <div class="questions"></div>
                    <div class="question-down text-center mt-3">Abajo</div>
                </form>
            </div>

            <div id="tab5" class="tab-content text-center">
                <div class="image"></div>
                <form>
                    <input type="text" id="name" name="name" placeholder="Nombre">
                    <a id="create">Crea personaje</a>
                </form>
            </div>
        </div>
    </div>
    <div class="row resume">
        <div class="col-sm-4 col-md-4 col-lg-4 block-1">
            <div class="resume-biography">
                <h2 class="resume-race-name text-center"></h2>
                <div class="resume-race-description"></div>
                <h2 class="resume-rol-name text-center mt-5"></h2>
                <div class="resume-rol-description"></div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 block-2">
            <div class="resume-personality">
                <div id="charm" class="personality charm"></div>
                <div id="charisma" class="personality charisma"></div>
                <div id="aggressiveness" class="personality aggressiveness"></div>
            </div>
            <div class="resume-pasive mt-5">
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 block-3">
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/newSheet.js') }}"></script>
@endsection
