<div class="row row-5 mt-5">
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 mt-1 text-center">
        <div class="combat_mode combat-land text-center"></div>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 mt-1 equipment armor land">
        @if (isset($sheet->equipments[1]))
            <div class="{{$sheet->equipments[1]->rarity->style}}"><img src="{{ asset($sheet->equipments[1]->image) }}"></div>
            <div class="value">{{$sheet->equipments[1]->characteristic->name}} {{$sheet->equipments[1]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/headgear.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 mt-1 equipment armor aquatic">
        @if (isset($sheet->equipments[7]))
            <div class="{{$sheet->equipments[7]->rarity->style}}"><img src="{{ asset($sheet->equipments[7]->image) }}"></div>
            <div class="value">{{$sheet->equipments[7]->characteristic->name}} {{$sheet->equipments[7]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/aquatic_headgear.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment jewellery">
        @if (isset($sheet->equipments[8]))
            <div class="{{$sheet->equipments[8]->rarity->style}}"><img src="{{ asset($sheet->equipments[8]->image) }}"></div>
            <div class="value">{{$sheet->equipments[8]->characteristic->name}} {{$sheet->equipments[8]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/back_item.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment weapon land set-1">
        @if (isset($sheet->weapons->main_1))
            <div class="{{$sheet->weapons->main_1->rarity->style}}"><img src="{{ asset($sheet->weapons->main_1->image) }}"></div>
            <div class="value">{{$sheet->weapons->main_1->name}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/main_weapon.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment weapon aquatic set-1">
        @if (isset($sheet->weapons->aquatic_1))
            <div class="{{$sheet->weapons->aquatic_1->rarity->style}}"><img src="{{ asset($sheet->weapons->aquatic_1->image) }}"></div>
            <div class="value">{{$sheet->weapons->aquatic_1->name}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/aquatic_weapon.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-2 offset-md-2 offset-lg-2 mt-1 equipment armor">
         @if (isset($sheet->equipments[2]))
            <div class="{{$sheet->equipments[2]->rarity->style}}"><img src="{{ asset($sheet->equipments[2]->image) }}"></div>
            <div class="value">{{$sheet->equipments[2]->characteristic->name}} {{$sheet->equipments[2]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/shoulders.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment jewellery">
        @if (isset($sheet->equipments[9]))
            <div class="{{$sheet->equipments[9]->rarity->style}}"><img src="{{ asset($sheet->equipments[9]->image) }}"></div>
            <div class="value">{{$sheet->equipments[9]->characteristic->name}} {{$sheet->equipments[9]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/amulet.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment weapon aquatic set-2">
        @if (isset($sheet->equipments[14]))
            <div class="{{$sheet->equipments[14]->rarity->style}}"><img src="{{ asset($sheet->equipments[14]->image) }}"></div>
            <div class="value">{{$sheet->equipments[14]->characteristic->name}} {{$sheet->equipments[14]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/aquatic_weapon.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment weapon land set-1">
        @if (isset($sheet->weapons->offhand_1))
            <div class="{{$sheet->weapons->offhand_1->rarity->style}}"><img src="{{ asset($sheet->weapons->offhand_1->image) }}"></div>
            <div class="value">{{$sheet->weapons->offhand_1->name}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/secondary_weapon.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-2 offset-md-2 offset-lg-2 mt-1 equipment armor">
        @if (isset($sheet->equipments[3]))
            <div class="{{$sheet->equipments[3]->rarity->style}}"><img src="{{ asset($sheet->equipments[3]->image) }}"></div>
            <div class="value">{{$sheet->equipments[3]->characteristic->name}} {{$sheet->equipments[3]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/chest.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment jewellery">
        @if (isset($sheet->equipments[10]))
            <div class="{{$sheet->equipments[10]->rarity->style}}"><img src="{{ asset($sheet->equipments[10]->image) }}"></div>
            <div class="value">{{$sheet->equipments[10]->characteristic->name}} {{$sheet->equipments[10]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/accesory_bear.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 empty"></div>
    <div class="col-sm-3 col-md-3 col-lg-3 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment weapon land set-2">
        @if (isset($sheet->weapons->main_2))
            <div class="{{$sheet->weapons->main_2->rarity->style}}"><img src="{{ asset($sheet->weapons->main_2->image) }}"></div>
            <div class="value">{{$sheet->weapons->main_2->name}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/secondary_weapon.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-2 offset-md-2 offset-lg-2 mt-1 equipment armor">
        @if (isset($sheet->equipments[4]))
            <div class="{{$sheet->equipments[4]->rarity->style}}"><img src="{{ asset($sheet->equipments[4]->image) }}"></div>
            <div class="value">{{$sheet->equipments[4]->characteristic->name}} {{$sheet->equipments[4]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/gloves.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment jewellery">
        @if (isset($sheet->equipments[10]))
            <div class="{{$sheet->equipments[10]->rarity->style}}"><img src="{{ asset($sheet->equipments[10]->image) }}"></div>
            <div class="value">{{$sheet->equipments[10]->characteristic->name}} {{$sheet->equipments[10]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/accesory_cube.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 empty"></div>
    <div class="col-sm-3 col-md-3 col-lg-3 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment weapon land set-2">
        @if (isset($sheet->weapons->offhand_2))
            <div class="{{$sheet->weapons->offhand_2->rarity->style}}"><img src="{{ asset($sheet->weapons->offhand_2->image) }}"></div>
            <div class="value">{{$sheet->weapons->offhand_2->name}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/secondary_weapon.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-2 offset-md-2 offset-lg-2 mt-1 equipment armor">
        @if (isset($sheet->equipments[5]))
            <div class="{{$sheet->equipments[5]->rarity->style}}"><img src="{{ asset($sheet->equipments[5]->image) }}"></div>
            <div class="value">{{$sheet->equipments[5]->characteristic->name}} {{$sheet->equipments[5]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/leggings.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment jewellery">
        @if (isset($sheet->equipments[11]))
            <div class="{{$sheet->equipments[11]->rarity->style}}"><img src="{{ asset($sheet->equipments[11]->image) }}"></div>
            <div class="value">{{$sheet->equipments[11]->characteristic->name}} {{$sheet->equipments[11]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/ring_right.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment jewellery">
        @if (isset($sheet->equipments[12]))
            <div class="{{$sheet->equipments[12]->rarity->style}}"><img src="{{ asset($sheet->equipments[12]->image) }}"></div>
            <div class="value">{{$sheet->equipments[12]->characteristic->name}} {{$sheet->equipments[12]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/relic.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-2 offset-md-2 offset-lg-2 mt-1 equipment armor">
        @if (isset($sheet->equipments[6]))
            <div class="{{$sheet->equipments[6]->rarity->style}}"><img src="{{ asset($sheet->equipments[6]->image) }}"></div>
            <div class="value">{{$sheet->equipments[6]->characteristic->name}} {{$sheet->equipments[6]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/boots.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment jewellery">
        @if (isset($sheet->equipments[11]))
            <div class="{{$sheet->equipments[11]->rarity->style}}"><img src="{{ asset($sheet->equipments[11]->image) }}"></div>
            <div class="value">{{$sheet->equipments[11]->characteristic->name}} {{$sheet->equipments[11]->rarity->increment}}</div>
        @else
            <div class="basic"><img src="{{ asset('/images/equipment/empty/ring_left.png') }}"></div>
            <div class="value"></div>
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 mt-1 equipment swap">
    </div>
</div>