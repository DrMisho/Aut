<div class="row">
<div class="card col-md-6">
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
  @foreach($car->image_path as $key => $image)
    @if($key==0)

    <li data-target="#demo" data-slide-to='{{$key}}' class="active"></li>
    @else
    <li data-target="#demo" data-slide-to='{{$key}}' ></li>

    @endif
@endforeach
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  @foreach($car->image_path as $key => $image)
  @if($key == 0)
  <div class="carousel-item active " >
      <img src='/{{$image}}'  class="img-fluid" alt="car image" >
  </div>
  @else
  <div class="carousel-item " >
      <img src='/{{$image}}'  class="img-fluid" alt="car image" >
  </div>
  @endif
  
@endforeach
   
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
  <div class="card-body">
    <h4 class="card-title text-center">
    {{$car->brand}}
    <hr/>
    {{$car->model}}
    <hr/>
    {{$car->initial_price.' '.$car->currency_name}}
    <hr/>
    {{$car->city_name}}
    </h4>
    <div id="accordion  card-text ">
@foreach ($car->basic_feature as $key => $feature)
<x-car-search :feature='$feature' ></x-car-search>
@endforeach
@foreach ($car->features->struct as $key => $group)
<x-group-view :group='$group' ></x-group-view>
@endforeach
</div>

</div>