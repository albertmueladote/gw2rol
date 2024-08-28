<div class="row row-6 mt-5">
    @foreach($sheet->knowledge AS $knowledge)
        <div class="knowledge col-sm-4 col-md-4 col-lg-4 offset-md-2 offset-lg-2 mt-2" id="knowledge-{{$knowledge->id}}">
            <div class="name">{{$knowledge->name}}</div>
            <div class="level">- Nivel {{$knowledge->pivot->level}}</div>
        </div>         
    @endforeach
    <div id="knowledge-description" class="knowledge">
        @foreach($sheet->knowledge AS $knowledge)
            <div class="knowledge-{{$knowledge->id}} text-center">
                {{$knowledge->description}}
            </div>
        @endforeach
    </div>
</div>