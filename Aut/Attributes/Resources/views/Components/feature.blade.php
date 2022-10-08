<div>
@if ( $feature->type_code == 'text_with_lang' && $feature->value_trans )
  <div class="card bg-light text-dark ">
  {{$feature->type_code}}
</div>
@elseif ($feature->type_code == 'number'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>

@elseif ($feature->type_code == 'tel'  && $feature->value)
<div class="card bg-light text-dark ">  
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div> 
@elseif ($feature->type_code == 'url'  && $feature->value)
<<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>
@elseif ($feature->type_code == 'number_range' && $feature->number_start && $feature->number_end )
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-4 col-sm-4 col-xs-4 col-xl-4">{{$feature->name}}</div> <div class="col-md-4 col-sm-4 col-xs-4 col-xl-4"> {{$feature->number_start}}</div> <div class="col-md-4 col-sm-4 col-xs-4 col-xl-4"> {{$feature->number_start}}</div> </div>
</div>
<div>
@elseif ($feature->type_code == 'data_range' && $feature->date_start && $feature->date_end )
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-4 col-sm-4 col-xs-4 col-xl-4">{{$feature->name}}</div> <div class="col-md-4 col-sm-4 col-xs-4 col-xl-4"> {{$feature->date_start}}</div> <div class="col-md-4 col-sm-4 col-xs-4 col-xl-4"> {{$feature->date_end}}</div> </div>
</div>
<div>

@elseif ($feature->type_code == 'date'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>


@elseif ($feature->type_code == 'date_time'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>



@elseif ($feature->type_code == 'time'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>

@elseif ($feature->type_code == 'text'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>


@elseif ($feature->type_code == 'email'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>

@elseif ($feature->type_code == 'color'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6" style='border-radius: 100px;background-color:{{$feature->value}}'> {{$feature->value}}</div> </div>
</div>


@elseif ($feature->type_code == 'file' && $feature->value)
@foreach($feature->value as $file)
<a href='/{{$file}}'>
{{$feature->name}}
</a>
@endforeach
@elseif ($feature->type_code == 'switch')
    <div class="card bg-light text-dark ">
        @if($feature->value == true)
            {{$feature->name}}
        @endif
    </div>
@elseif ($feature->type_code == 'image'  && $feature->value)
@foreach($feature->value as $image)
<img src='/{{$image}}'  class="img-fluid" alt="car image" >
@endforeach
@elseif ($feature->type_code == 'text_editor'  && $feature->value_trans)
<div class="card bg-light text-dark ">
{{$feature->type_code}}
</div>
@elseif ($feature->type_code == 'select'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>
  @elseif ($feature->type_code == 'values'  && $feature->value)
  <div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6"> {{$feature->value}}</div> </div>
</div>
@elseif ($feature->type_code == 'list_select'  && $feature->value)
<div class="card bg-light text-dark ">
{{$feature->type_code}}
</div>
@elseif ($feature->type_code == 'colors'  && $feature->value)
<div class="card bg-light text-dark ">
    <div class="card-body row"> <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">{{$feature->name}}</div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6">
    @foreach($feature->value as $color)
    <div class="col-md-2 col-sm-2 col-xs-2 col-xl-2" style='border-radius: 100px;background-color:{{$color}}'> {{$color}}</div> </div>
    @endforeach
    </div>
</div>


@endif
</div>