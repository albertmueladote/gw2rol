<div class="row row-4 mt-5">
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 charateristic" id="power">
        <div class="icon"><img src="{{ asset('/images/characteristics/Potencia.png') }}"></div>
        <div class="value">{{$sheet->characteristics->power}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 charateristic" id="toughness">
        <div class="icon"><img src="{{ asset('/images/characteristics/Dureza.png') }}"></div>
        <div class="value">{{$sheet->characteristics->toughness}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 charateristic" id="vitality">
        <div class="icon"><img src="{{ asset('/images/characteristics/Vitalidad.png') }}"></div>
        <div class="value">{{$sheet->characteristics->vitality}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 charateristic" id="precision">
        <div class="icon"><img src="{{ asset('/images/characteristics/Precisión.png') }}"></div>
        <div class="value">{{$sheet->characteristics->precision}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 charateristic" id="ferocity">
        <div class="icon"><img src="{{ asset('/images/characteristics/Ferocidad.png') }}"></div>
        <div class="value">{{$sheet->characteristics->ferocity}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 charateristic" id="condition_damage">
        <div class="icon"><img src="{{ asset('/images/characteristics/Daño_de_condición.png') }}"></div>
        <div class="value">{{$sheet->characteristics->condition_damage}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 charateristic" id="expertise">
        <div class="icon"><img src="{{ asset('/images/characteristics/Duración_de_condición.png') }}"></div>
        <div class="value">{{$sheet->characteristics->expertise}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 charateristic" id="concentration">
        <div class="icon"><img src="{{ asset('/images/characteristics/Poder_de_curación.png') }}"></div>
        <div class="value">{{$sheet->characteristics->concentration}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 charateristic" id="healing_power">
        <div class="icon"><img src="{{ asset('/images/characteristics/Duración_de_bendición.png') }}"></div>
        <div class="value">{{$sheet->characteristics->healing_power }}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 aquatic_charateristic" id="aquatic_power">
        <div class="icon"><img src="{{ asset('/images/characteristics/Potencia.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->power}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 aquatic_charateristic" id="aquatic_toughness">
        <div class="icon"><img src="{{ asset('/images/characteristics/Dureza.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->toughness}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 aquatic_charateristic" id="aquatic_vitality">
        <div class="icon"><img src="{{ asset('/images/characteristics/Vitalidad.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->vitality}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 aquatic_charateristic" id="aquatic_precision">
        <div class="icon"><img src="{{ asset('/images/characteristics/Precisión.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->precision}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 aquatic_charateristic" id="aquatic_ferocity">
        <div class="icon"><img src="{{ asset('/images/characteristics/Ferocidad.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->ferocity}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 aquatic_charateristic" id="aquatic_condition_damage">
        <div class="icon"><img src="{{ asset('/images/characteristics/Daño_de_condición.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->condition_damage}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 aquatic_charateristic" id="aquatic_expertise">
        <div class="icon"><img src="{{ asset('/images/characteristics/Duración_de_condición.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->expertise}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 aquatic_charateristic" id="aquatic_concentration">
        <div class="icon"><img src="{{ asset('/images/characteristics/Poder_de_curación.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->concentration}}</div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 aquatic_charateristic" id="aquatic_healing_power">
        <div class="icon"><img src="{{ asset('/images/characteristics/Duración_de_bendición.png') }}"></div>
        <div class="value">{{$sheet->aquatic_characteristics->healing_power }}</div>
    </div>
    <div id="charateristics-description" class="charateristics">
        <div class="aquatic_power power text-center">
            Potencia
        </div>
        <div class="aquatic_toughness toughness text-center">
            Dureza
        </div>
        <div class="aquatic_vitality vitality text-center">
            Vitalidad
        </div>
        <div class="aquatic_precision precision text-center">
            Precisión
        </div>
        <div class="aquatic_ferocity ferocity text-center">
            Ferocidad
        </div>
        <div class="aquatic_condition_damage condition_damage text-center">
            Daño de condición
        </div>
        <div class="aquatic_expertise expertise text-center">
            Pericia
        </div>
        <div class="aquatic_concentration concentration text-center">
            Concentración
        </div>
        <div class="aquatic_healing_power healing_power text-center">
            Poder de curación
        </div>
    </div>
</div>