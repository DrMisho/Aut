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

<form method="POST" class="form-group  w-50" action="{{ route('poll.vote', $id) }}" >
    @csrf
    <div class="card card-primary">
        <div class="card-heading text-center text-capitalize">
            <h3 class="card-title ">
                <span class="glyphicon glyphicon-arrow-right"></span> {{ $question }}
            </h3>
        </div>
    </div>
    <div class="card-body text-right bg-light">
        <ul class="list-group">
            @foreach($options as $id => $option)
                <div class=" form-group border-bottom">
                  <label class="" for="{{  $option->name }}">
                    {{  $option->name }}
                  </label>
                  <input class=" form-control-lg h4" type="radio" name="options" value="{{ $option->id }}" id="{{  $option->name }}">
                </div>           
                   
            @endforeach
        </ul>
    </div>
    <div class="card-footer">
        <input type="submit" class="btn btn-primary btn-bg text-center" value="@lang('Polling::pollings.vote')" />
    </div>
</form>
