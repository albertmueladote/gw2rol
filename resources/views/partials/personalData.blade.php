<div class="row row-1 mt-5">
    <div id="name-content" class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1">
        <div class="label">Nombre</div>
        <div id="name">{{$sheet->name}}</div>
    </div>
    <div id="race-content" class="col-sm-2 col-md-2 col-lg-2">
        <div class="label">Raza</div>
        <div id="race">{{$sheet->race->name}}</div>
    </div>
    <div id="rol-content" class="col-sm-2 col-md-2 col-lg-2">
        <div class="label">Clase</div>
        <div id="rol">{{$sheet->rol->name}}</div>
    </div>
    <div id="gender-content" class="col-sm-2 col-md-2 col-lg-2">
        <div class="label">Sexo</div>
        <div id="rol">{{$sheet->gender}}</div>
    </div>
    <div id="level-content" class="col-sm-2 col-md-2 col-lg-2">
        <div class="label">Nivel</div>
        <div id="level">{{$sheet->level}}</div>
    </div>
</div>