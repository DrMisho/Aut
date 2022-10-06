@foreach($modules as $module)
    <x-site-builder-module :module="$module" >
        @if($component->hasChildren)
            @foreach($component->children as $subModule)
                <x-site-builder-module :module="$subModule" />
            @endforeach
        @endif
    </x-site-builder-module>
@endforeach