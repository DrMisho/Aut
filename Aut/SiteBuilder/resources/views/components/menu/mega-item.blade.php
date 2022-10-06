@if($item->node_type == 'list')
    <x-site-builder-menu-mega-list :item="$item"  :has-parent="$hasParent"/>
@endif

@if($item->node_type == 'dynamic')
    <x-site-builder-menu-mega-dynamic :item="$item"  :has-parent="$hasParent"/>
@endif

@if($item->node_type == 'url')
    <x-site-builder-menu-mega-url :item="$item"  :has-parent="$hasParent"/>
@endif

@if($item->node_type == 'link')
    <x-site-builder-menu-mega-link :item="$item"  :has-parent="$hasParent"/>
@endif
