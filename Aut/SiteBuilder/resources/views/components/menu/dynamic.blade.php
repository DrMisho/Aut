<li class="@if($hasChildren){{ 'dropdown' }}@endif">
    <a class="@if($hasChildren){{ 'dropdown-toggle' }}@endif">{{ $text }}</a>
    @if($hasChildren)
        <ul class='dropdown-menu'>
            @foreach($items as $item)
                <x-site-builder-menuable-item :item="$item" :sub-items="$subItems" has-parent :dynamic-parents="$appendDynamicParents($item)"/>
            @endforeach
        </ul>
    @endif
</li>
