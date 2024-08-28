<div class="row row-3 mt-5">
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 weapon-skill skill skill-1 set-1 land" id="skill-1-1">
        @if(isset($sheet->weapons->main_1->skills[1]->image))
            <img src="{{ asset($sheet->weapons->main_1->skills[1]->image) }}">
        @elseif(isset($sheet->weapons->offhand_1->skills[1]->image))
            <img src="{{ asset($sheet->weapons->offhand_1->skills[1]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 land" id="skill-1-2">
        @if(isset($sheet->weapons->main_1->skills[2]->image))
            <img src="{{ asset($sheet->weapons->main_1->skills[2]->image) }}">
        @elseif(isset($sheet->weapons->offhand_1->skills[2]->image))
            <img src="{{ asset($sheet->weapons->offhand_1->skills[2]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 land" id="skill-1-3">
        @if(isset($sheet->weapons->main_1->skills[3]->image))
            <img src="{{ asset($sheet->weapons->main_1->skills[3]->image) }}">
        @elseif(isset($sheet->weapons->offhand_1->skills[3]->image))
            <img src="{{ asset($sheet->weapons->offhand_1->skills[3]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 land" id="skill-1-4">
        @if(isset($sheet->weapons->main_1->skills[4]->image))
            <img src="{{ asset($sheet->weapons->main_1->skills[4]->image) }}">
        @elseif(isset($sheet->weapons->offhand_1->skills[4]->image))
            <img src="{{ asset($sheet->weapons->offhand_1->skills[4]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 land" id="skill-1-5">
        @if(isset($sheet->weapons->main_1->skills[5]->image))
            <img src="{{ asset($sheet->weapons->main_1->skills[5]->image) }}">
        @elseif(isset($sheet->weapons->offhand_1->skills[5]->image))
            <img src="{{ asset($sheet->weapons->offhand_1->skills[5]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 weapon-skill skill skill-1 set-2 land" id="skill-2-1">
        @if(isset($sheet->weapons->main_2->skills[1]->image))
            <img src="{{ asset($sheet->weapons->main_2->skills[1]->image) }}">
        @elseif(isset($sheet->weapons->offhand_2->skills[1]->image))
            <img src="{{ asset($sheet->weapons->offhand_2->skills[1]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 land" id="skill-2-2">
        @if(isset($sheet->weapons->main_2->skills[2]->image))
            <img src="{{ asset($sheet->weapons->main_2->skills[2]->image) }}">
        @elseif(isset($sheet->weapons->offhand_2->skills[2]->image))
            <img src="{{ asset($sheet->weapons->offhand_2->skills[2]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 land" id="skill-2-3">
        @if(isset($sheet->weapons->main_2->skills[3]->image))
            <img src="{{ asset($sheet->weapons->main_2->skills[3]->image) }}">
        @elseif(isset($sheet->weapons->offhand_2->skills[3]->image))
            <img src="{{ asset($sheet->weapons->offhand_2->skills[3]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 land" id="skill-2-4">
        @if(isset($sheet->weapons->main_2->skills[4]->image))
            <img src="{{ asset($sheet->weapons->main_2->skills[4]->image) }}">
        @elseif(isset($sheet->weapons->offhand_2->skills[4]->image))
            <img src="{{ asset($sheet->weapons->offhand_2->skills[4]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 land" id="skill-2-5">
        @if(isset($sheet->weapons->main_2->skills[5]->image))
            <img src="{{ asset($sheet->weapons->main_2->skills[5]->image) }}">
        @elseif(isset($sheet->weapons->offhand_2->skills[5]->image))
            <img src="{{ asset($sheet->weapons->offhand_2->skills[5]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 healing-skill skill set-1 land" id="skill-6">
        <img src="{{ asset('/images/skills/healing/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 support-skill skill set-1 land" id="skill-7">
        <img src="{{ asset('/images/skills/support/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 support-skill skill set-1 land" id="skill-8">
        <img src="{{ asset('/images/skills/support/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 support-skill skill set-1 land" id="skill-9">
        <img src="{{ asset('/images/skills/support/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 elite-skill skill set-1 land" id="skill-10">
        <img src="{{ asset('/images/skills/elite/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 weapon-skill skill skill-1 set-1 aquatic" id="skill-3-1">
        @if(isset($sheet->weapons->aquatic_1->skills[1]->image))
            <img src="{{ asset($sheet->weapons->aquatic_1->skills[1]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 aquatic" id="skill-3-2">
        @if(isset($sheet->weapons->aquatic_1->skills[2]->image))
            <img src="{{ asset($sheet->weapons->aquatic_1->skills[2]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 aquatic" id="skill-3-3">
        @if(isset($sheet->weapons->aquatic_1->skills[3]->image))
        <img src="{{ asset($sheet->weapons->aquatic_1->skills[3]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 aquatic" id="skill-3-4">
        @if(isset($sheet->weapons->aquatic_1->skills[4]->image))
            <img src="{{ asset($sheet->weapons->aquatic_1->skills[4]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-1 aquatic" id="skill-3-5">
        @if(isset($sheet->weapons->aquatic_1->skills[5]->image))
            <img src="{{ asset($sheet->weapons->aquatic_1->skills[5]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 offset-sm-1 offset-md-1 offset-lg-1 weapon-skill skill skill-1 set-2 aquatic" id="skill-4-1">
        @if(isset($sheet->weapons->aquatic_2->skills[1]->image))
            <img src="{{ asset($sheet->weapons->aquatic_2->skills[1]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 aquatic" id="skill-4-2">
        @if(isset($sheet->weapons->aquatic_2->skills[2]->image))
            <img src="{{ asset($sheet->weapons->aquatic_2->skills[2]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 aquatic" id="skill-4-3">
        @if(isset($sheet->weapons->aquatic_2->skills[3]->image))
        <img src="{{ asset($sheet->weapons->aquatic_2->skills[3]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 aquatic" id="skill-4-4">
        @if(isset($sheet->weapons->aquatic_2->skills[4]->image))
            <img src="{{ asset($sheet->weapons->aquatic_2->skills[4]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 weapon-skill skill set-2 aquatic" id="skill-4-5">
        @if(isset($sheet->weapons->aquatic_2->skills[5]->image))
            <img src="{{ asset($sheet->weapons->aquatic_2->skills[5]->image) }}">
        @endif
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 healing-skill skill set-1 aquatic" id="skill-16">
        <img src="{{ asset('/images/skills/healing/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 support-skill skill set-1 aquatic" id="skill-17">
        <img src="{{ asset('/images/skills/support/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 support-skill skill set-1 aquatic" id="skill-18">
        <img src="{{ asset('/images/skills/support/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 support-skill skill set-1 aquatic" id="skill-19">
        <img src="{{ asset('/images/skills/support/') }}">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 elite-skill skill set-1 aquatic" id="skill-20">
        <img src="{{ asset('/images/skills/elite/') }}">
    </div>
    <div id="skills-description" class="skills">
        @for($x = 1; $x <= 5; $x++)
            @if (isset($sheet->weapons->main_1->skills[$x]))
                <div class="skill set-1 skill-1-{{$x}}">
                    <div class="name">{{ $sheet->weapons->main_1->skills[$x]->name }}</div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="coldown_icon icon"><img src="{{ asset('/images/icons/coldown.png') }}"></div>
                        <div class="coldown value">{{ $sheet->weapons->main_1->skills[$x]->coldown }}</div>
                        <div class="canalization_icon icon"><img src="{{ asset('/images/icons/canalization.png') }}"></div>
                        <div class="canalization value">{{ $sheet->weapons->main_1->skills[$x]->canalization }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        @if($sheet->weapons->main_1->skills[$x]->type == 'Rotación')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/rotation.png') }}"></div>
                        @elseif($sheet->weapons->main_1->skills[$x]->type == 'Reacción')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/reaction.png') }}"></div>
                        @endif
                        <div class="type text">{{ $sheet->weapons->main_1->skills[$x]->type }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="objective_icon icon"><img src="{{ asset('/images/icons/objective.png') }}"></div>
                        <div class="objective text">{{ $sheet->weapons->main_1->skills[$x]->objective }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="description text">{{ $sheet->weapons->main_1->skills[$x]->description }}</div>
                    </div>
                </div>
            @endif
            @if (isset($sheet->weapons->offhand_1->skills[$x]))
                <div class="skill set-1 skill-1-{{$x}}">
                    <div class="name">{{ $sheet->weapons->offhand_1->skills[$x]->name }}</div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="coldown_icon icon"><img src="{{ asset('/images/icons/coldown.png') }}"></div>
                        <div class="coldown value">{{ $sheet->weapons->offhand_1->skills[$x]->coldown }}</div>
                        <div class="canalization_icon icon"><img src="{{ asset('/images/icons/canalization.png') }}"></div>
                        <div class="canalization value">{{ $sheet->weapons->offhand_1->skills[$x]->canalization }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        @if($sheet->weapons->offhand_1->skills[$x]->type == 'Rotación')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/rotation.png') }}"></div>
                        @elseif($sheet->weapons->offhand_1->skills[$x]->type == 'Reacción')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/reaction.png') }}"></div>
                        @endif
                        <div class="type text">{{ $sheet->weapons->offhand_1->skills[$x]->type }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="objective_icon icon"><img src="{{ asset('/images/icons/objective.png') }}"></div>
                        <div class="objective text">{{ $sheet->weapons->offhand_1->skills[$x]->objective }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="description text">{{ $sheet->weapons->offhand_1->skills[$x]->description }}</div>
                    </div>
                </div>
            @endif
        @endfor
        @for($x = 1; $x <= 5; $x++)
            @if (isset($sheet->weapons->main_2->skills[$x]))
                <div class="skill set-1 skill-2-{{$x}}">
                    <div class="name">{{ $sheet->weapons->main_2->skills[$x]->name }}</div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="coldown_icon icon"><img src="{{ asset('/images/icons/coldown.png') }}"></div>
                        <div class="coldown value">{{ $sheet->weapons->main_2->skills[$x]->coldown }}</div>
                        <div class="canalization_icon icon"><img src="{{ asset('/images/icons/canalization.png') }}"></div>
                        <div class="canalization value">{{ $sheet->weapons->main_2->skills[$x]->canalization }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        @if($sheet->weapons->main_2->skills[$x]->type == 'Rotación')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/rotation.png') }}"></div>
                        @elseif($sheet->weapons->main_2->skills[$x]->type == 'Reacción')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/reaction.png') }}"></div>
                        @endif
                        <div class="type text">{{ $sheet->weapons->main_2->skills[$x]->type }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="objective_icon icon"><img src="{{ asset('/images/icons/objective.png') }}"></div>
                        <div class="objective text">{{ $sheet->weapons->main_2->skills[$x]->objective }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="description text">{{ $sheet->weapons->main_2->skills[$x]->description }}</div>
                    </div>
                </div>
            @elseif(isset($sheet->weapons->offhand_2->skills[$x]))
                <div class="skill set-1 skill-2-{{$x}}">
                    <div class="name">{{ $sheet->weapons->offhand_2->skills[$x]->name }}</div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="coldown_icon icon"><img src="{{ asset('/images/icons/coldown.png') }}"></div>
                        <div class="coldown value">{{ $sheet->weapons->offhand_2->skills[$x]->coldown }}</div>
                        <div class="canalization_icon icon"><img src="{{ asset('/images/icons/canalization.png') }}"></div>
                        <div class="canalization value">{{ $sheet->weapons->offhand_2->skills[$x]->canalization }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        @if($sheet->weapons->offhand_2->skills[$x]->type == 'Rotación')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/rotation.png') }}"></div>
                        @elseif($sheet->weapons->offhand_2->skills[$x]->type == 'Reacción')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/reaction.png') }}"></div>
                        @endif
                        <div class="type text">{{ $sheet->weapons->offhand_2->skills[$x]->type }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="objective_icon icon"><img src="{{ asset('/images/icons/objective.png') }}"></div>
                        <div class="objective text">{{ $sheet->weapons->offhand_2->skills[$x]->objective }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="description text">{{ $sheet->weapons->offhand_2->skills[$x]->description }}</div>
                    </div>
                </div>
            @endif
        @endfor
        @if(isset($sheet->weapons->aquatic_1))
            @for($x = 1; $x <= 5; $x++)
                <div class="skill set-1 skill-3-{{$x}}">
                    <div class="name">{{ $sheet->weapons->aquatic_1->skills[$x]->name }}</div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="coldown_icon icon"><img src="{{ asset('/images/icons/coldown.png') }}"></div>
                        <div class="coldown value">{{ $sheet->weapons->aquatic_1->skills[$x]->coldown }}</div>
                        <div class="canalization_icon icon"><img src="{{ asset('/images/icons/canalization.png') }}"></div>
                        <div class="canalization value">{{ $sheet->weapons->aquatic_1->skills[$x]->canalization }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        @if($sheet->weapons->aquatic_1->skills[$x]->type == 'Rotación')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/rotation.png') }}"></div>
                        @elseif($sheet->weapons->aquatic_1->skills[$x]->type == 'Reacción')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/reaction.png') }}"></div>
                        @endif
                        <div class="type text">{{ $sheet->weapons->aquatic_1->skills[$x]->type }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="objective_icon icon"><img src="{{ asset('/images/icons/objective.png') }}"></div>
                        <div class="objective text">{{ $sheet->weapons->aquatic_1->skills[$x]->objective }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="description text">{{ $sheet->weapons->aquatic_1->skills[$x]->description }}</div>
                    </div>
                </div>
            @endfor
        @endif
        @if(isset($sheet->weapons->aquatic_2))
            @for($x = 1; $x <= 5; $x++)
                <div class="skill set-1 skill-4-{{$x}}">
                    <div class="name">{{ $sheet->weapons->aquatic_2->skills[$x]->name }}</div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="coldown_icon icon"><img src="{{ asset('/images/icons/coldown.png') }}"></div>
                        <div class="coldown value">{{ $sheet->weapons->aquatic_2->skills[$x]->coldown }}</div>
                        <div class="canalization_icon icon"><img src="{{ asset('/images/icons/canalization.png') }}"></div>
                        <div class="canalization value">{{ $sheet->weapons->aquatic_2->skills[$x]->canalization }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        @if($sheet->weapons->aquatic_2->skills[$x]->type == 'Rotación')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/rotation.png') }}"></div>
                        @elseif($sheet->weapons->aquatic_2->skills[$x]->type == 'Reacción')
                            <div class="type_icon icon"><img src="{{ asset('/images/icons/reaction.png') }}"></div>
                        @endif
                        <div class="type text">{{ $sheet->weapons->aquatic_2->skills[$x]->type }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="objective_icon icon"><img src="{{ asset('/images/icons/objective.png') }}"></div>
                        <div class="objective text">{{ $sheet->weapons->aquatic_2->skills[$x]->objective }}</div>
                    </div>
                    <div class="separator mt-2"></div>
                    <div class="mt-2">
                        <div class="description text">{{ $sheet->weapons->aquatic_2->skills[$x]->description }}</div>
                    </div>
                </div>
            @endfor
        @endif
    </div>
</div>