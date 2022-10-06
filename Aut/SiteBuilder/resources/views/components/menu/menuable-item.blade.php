<li class="@if($hasChildren){{ 'dropdown' }}@endif">
    <a class="@if($hasChildren){{ 'dropdown-toggle' }}@endif" href="{{ $href }}">{{ $text }}</a>
    @if($hasChildren)
        <ul class="dropdown-menu">
            @foreach($items as $item)
                <x-site-builder-menu-item :item="$item" :dynamic-parents="$appendDynamicParents()"/>
            @endforeach
        </ul>
    @endif
</li>
