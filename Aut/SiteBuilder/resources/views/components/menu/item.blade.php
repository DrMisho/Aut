@if($item->node_type == 'url')
    <x-site-builder-menu-url :item="$item" :has-parent="$hasParent" :dynamic-parents="$dynamicParents"/>
@endif

@if($item->node_type == 'link')
    <x-site-builder-menu-link :item="$item" :has-parent="$hasParent" :dynamic-parents="$dynamicParents"/>
@endif

@if($item->node_type == 'list')
    <x-site-builder-menu-list :item="$item" :has-parent="$hasParent" :dynamic-parents="$dynamicParents"/>
@endif

@if($item->node_type == 'mega_list')
    <x-site-builder-menu-mega :item="$item" :has-parent="$hasParent" :dynamic-parents="$dynamicParents"/>
@endif

@if($item->node_type == 'dynamic')
    <x-site-builder-menu-dynamic :item="$item" :has-parent="$hasParent" :dynamic-parents="$dynamicParents"/>
@endif
