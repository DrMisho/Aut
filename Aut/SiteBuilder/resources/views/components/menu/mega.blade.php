<li class="dropdown mega-menu">
    <a class="dropdown-toggle">{{ $text }}</a>
    @if($hasChildren)
        <ul class='dropdown-menu'>
            <li>
                <div class="row">
                    @foreach($items as $item)
                        <x-site-builder-menu-mega-item :item="$item" has-parent/>
                    @endforeach
                </div>
            </li>
        </ul>
    @endif
</li>
