<div class="col-md-5th">
    <ul class="list-unstyled">
        @if($text)<li><span>{{ $text }}</span></li>@endif
        @foreach($items as $item)
            <x-site-builder-menu-mega-item :item="$item" />
        @endforeach
    </ul>
</div>