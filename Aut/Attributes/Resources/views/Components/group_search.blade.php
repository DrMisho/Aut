<div class="card col-md-12">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href='#{{str_replace(" ", "_", $group["name"])}}'>
      {{$group["name"]}}
      </a>
    </div>
    <div id='{{str_replace(" ", "_", $group["name"])}}' class="collapse " data-parent="#accordion">
      <div class="card-body">
      @foreach ($group['tasks'] as $task)
@if (array_key_exists('feature_id',$task)&&$task['feature_id'])
<x-feature-search :feature='$task["feature"]' :id='$task["id"]'/>
@else
<div id="accordion container ">

<x-group-search :group='$task' />
</div>
@endif
@endforeach

</div>
    </div>
  </div>
