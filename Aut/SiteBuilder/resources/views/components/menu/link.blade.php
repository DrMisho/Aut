<li class="@if($hasChildren){{ 'dropdown' }}@endif">
    <a class="@if($hasChildren){{ 'dropdown-toggle' }}@endif" href="{{ $href }}">{{ $text }}</a>
    @if($hasChildren)
        <ul class='dropdown-menu'>
            @foreach($children as $item)
                <x-site-builder-menu-item :item="$item" has-parent/>
            @endforeach
        </ul>
    @endif
</li>
