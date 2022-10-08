<div class="row col-md-12 col-sm-12">
    @foreach($info->data as $car)
    <div class="col-md-6">
     <x-car-card :car='$car' ></x-car-card>
   </div>
 @endforeach
</div>
