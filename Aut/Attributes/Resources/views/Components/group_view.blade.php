<div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href='#{{str_replace(" ", "_", $group->name)}}'>
      {{$group->name}}
      </a>
    </div>
    <div id='{{str_replace(" ", "_", $group->name)}}' class="collapse " data-parent="#accordion">
      <div class="card-body">
      @foreach ($group->tasks as $task)
@if (property_exists($task,'feature_id')&&$task->feature_id)
<x-feature :feature='$task->feature'/>
@else
<div id="accordion container ">

<x-group-view :group='$task' />
</div>
@endif
@endforeach

</div>
    </div>
  </div>
