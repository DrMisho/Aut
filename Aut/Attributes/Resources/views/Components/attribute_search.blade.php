<div class="accordion container col-md-12 row">
    @foreach ($struct as $group)
    <x-group-search :group='$group'/>
    @endforeach
</div>