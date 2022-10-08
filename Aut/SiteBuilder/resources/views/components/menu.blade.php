<div class="navbar-collapse collapse float-right nav-main-collapse @if($dark){{ 'submenu-dark' }}@endif">
    <nav class="nav-main">
        <ul id="topMain" class="nav nav-pills nav-main">
            @foreach($menu as $item)
                <x-site-builder-menu-item :item="$item"/>
            @endforeach
        </ul>
    </nav>
</div>