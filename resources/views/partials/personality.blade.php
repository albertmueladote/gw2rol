<div class="row row-2 mt-5">
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-3 offset-md-3 offset-lg-3">
        <img src="{{ asset('/images/personality/charm.png') }}">
        <div id="charm" class="personality charm">{{$sheet->charm}}</div>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2">
        <img src="{{ asset('/images/personality/charisma.png') }}">
        <div id="charisma" class="personality charisma">{{$sheet->charisma}}</div>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2">
        <img src="{{ asset('/images/personality/aggressiveness.png') }}">
        <div id="aggressiveness" class="personality aggressiveness">{{$sheet->aggressiveness}}</div>
    </div>
</div>