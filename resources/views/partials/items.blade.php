<div class="row row-7 mt-5">
    <div class="bag col-sm-8 col-md-8 col-lg-8 offset-md-2 offset-lg-2 mt-2" id="bag-1">
        <div class="icon"><img src="{{ asset('/images/items/Mochila_multiuso_universal.png') }}"></div>
        <div class="name">Mochila de 6 espacios</div>
    </div>
</div>
<div class="row row-8 mt-2">
    <div class="col-sm-10 col-md-10 col-lg-10 offset-md-2 offset-lg-2 mt-2">
        @foreach($sheet->items AS $item)
            <div class="item" id="item-{{$item->id}}">
                <img src="{{ asset($item->image) }}">
            </div>
        @endforeach
    </div>
</div>
<div id="items-description" class="items">
    @foreach($sheet->items AS $item)
        <div class="item-{{$item->id}} text-center">
            {!! $item->description !!}
        </div>
    @endforeach
</div>