@if(Session::has('errors'))
    <div class="alert alert-danger">
            {{ session('errors') }}
    </div>
@endif
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="card text-primary bg-light col-md-8  m-auto ">
  <div class="card-header text-center">
<h5>@lang('Polling::pollings.Pollings'): {{ $resulte['question'] }}</h5>
  </div>
  <div class="card-body">

@foreach($resulte['options'] as $option)
    <div class='result-option-id'>
        <strong>{{ $option->name }}</strong><span class='pull-right'>  {{ $option->percent }}%</span>
        <div class='progress'>
            <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='{{ $option->percent }}' aria-valuemin='0' aria-valuemax='100' style='width: {{ $option->percent }}%'>
                <span class='sr-only'>{{ $option->percent }}% Complete</span>
            </div>
        </div>

    </div>
@endforeach
  </div>
</div>
