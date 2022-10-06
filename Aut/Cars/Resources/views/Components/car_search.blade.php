<div class="row">
  <div class=" col-md-3">
    <div class="content">
      <form  method="POST"  id="search_form">
        @csrf
        <h1>Car Search</h1>
        <div class="form-group">
            <label for="automobile_type_id">Automobile Type Car</label>
            <select class="form-control" name="automobile_type_id" value="" id="automobile_type_id" click>
                <option value='' selected>select Automobile type</option>
                @foreach ($automobile_types as $type)
              <option value='{{$type['id']}}'>{{$type['name']}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="brand_id">Brand Car</label>
            <select class="form-control" name="brand_id" value=""  id="brand_id" >
                <option value='' selected>select Brands </option>
                @foreach ($brands as $brand)
              <option value='{{$brand['id']}}'>{{$brand['name']}}</option>
                @endforeach
            </select>
          </div>
        <div class="form-group">
          <label for="car_model_id">Car Model   <span  id="loading_model" class="fas fa-spinner fa-spin"></span></label>
          <select class="form-control" name="car_model_id" id="car_model_id" >
            <option value='' selected></span> select brand and type first </option>
           
          </select>
        </div>
        <div class="form-group">
          <label for="city_id">Select City</label>
          <select class="form-control" name="" id="city_id">
            <option value='' selected>select City</option>
            @foreach ($cities as $city)
          <option value='{{$city['id']}}'>{{$city['name']}}</option>
            @endforeach
          </select>
        </div>
        <button type="button" name="search_btn" id="search_btn" class="btn btn-primary" btn-lg btn-block">Search</button>
        <div class="form-check form-check-inline ">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="true"  name="advance_search" id="advance_search" >
           with advance search
          </label>
        </div>
       <div class="row" id='wiht_advance_search'>
       </div>
      </form>
       
    </div>
</div>
<div id="cars" class="col-md-9 row">
  <span  id="loading_car" class="fas fa-6x fa-spinner fa-spin" style="    opacity: 50%;
  display: block;
  position: fixed;
  z-index: 1031;
  top: 50%;
  right: 50%;"></span>

</div>
</div>


<script>
  //hide loading
  initialCar();
  function initialCar(){
    let request = '\\car\\all?';
    let params = '';
    $("#advance_search").on('change', function () {
      // $("#advance_search:checked").val()
      let checked  = $("#advance_search:checked").val();
      if(checked == 'true'){
        $('#wiht_advance_search').show();

      }
      else{
        $('#wiht_advance_search').hide();

      }

    });
    let url = request+params;
      console.log(url);
      $.ajax({
            url,
            type: 'GET',
            beforeSend:function(xhr){
         
             $('#loading_car').show();
            },
            complete(xhr,status){
              $('#loading_car').hide();
            },
            dataType: 'html',
            success: function (res) {
              $('#cars')
                    .find('div')
                    .remove()
                    .end();
                $('#cars').append(`${res}`);
            }

    });
  }
  $('#loading_model').hide();
    $("#automobile_type_id").on('change', function () {
        filter();
        attribute();
    });
    $("#brand_id").on('change', function () {
        filter();
    });
    $("#search_btn").on('click',function (event) {
      event.preventDefault();
      search();
    });
    
    function search(){

      let automobile_type_id =  document.getElementById('automobile_type_id').value;
      let brand_id =  document.getElementById('brand_id').value;
      let car_model_id =  document.getElementById('car_model_id').value;
      let city_id =  document.getElementById('city_id').value;
      let _token   = $('meta[name="csrf-token"]').attr('content');

      //fill features 
      let array_search = [] ;
      // جلب كل الخواص التي ستدخل في البحث
      let features = $(".feature-search");
      for(let i in features){
        //جلب ال id لهذه الخواص 
        let id = features[i].id;
        //الوصول للقيمة لمختارة 
        // Test Value For Some Type
        
        //اختبار النوع 
      //   console.log($(`#${id}`).attr('attribute_type'));
      //  let type_code = features[i].type ;
      //   switch (type_code) {
      //     case 'date':
      //       console.log('date val',$(`#${id}`).val());
      //       break;
      //     case 'number_range':
      //     console.log('number val',$(`#${id}`).val());
      //     break;
      //     case 'checkbox':
      //     console.log('checkbox val',$(`#${id}`).val());
      //     break;
      //     default:
      //       break;
      //   }
        values = $(`#${id}`).val();
        
        if(values && values.length > 0){
          array_search.push({id,filter_value:values});
        }
      }
      // console.log(array_search);
      let request = `\\car\\all?`;
      
      let params = {};
   
      if(automobile_type_id){
        params.active_automobile_types =   automobile_type_id;
      }
      if(brand_id){
        params.active_brands =   brand_id;
      }
      if(car_model_id){
        params.active_car_model =   car_model_id;
      }
      if(city_id){
        params.city_id = city_id
      }
      let checked  = $("#advance_search:checked").val();
      if(checked == 'true'){
        console.log('with searh advance');
        params.with_advance_search = true;
        params.feature_search = array_search; 
      }
      else{
        params.with_advance_search = false;

      }
       params._token = _token;
      let url = request;
      console.log(params);
      $.ajax({
            url,
            data:params,
            type: 'POST',
            dataType: 'html',
            beforeSend:function(xhr){
              $('#loading_car').show();
            },
            complete(xhr,status){
              $('#loading_car').hide();

            },
            success: function (res) {
               console.log('cars', res);
               $('#cars')
                    .find('div')
                    .remove()
                    .end();
                $('#cars').append(`${res}`);  
            }          
        });
    }
    function filter(event){
      // event.preventDefault();
      // فيمة معرف نوع السيارة
      let automobile_type_id =  document.getElementById('automobile_type_id').value;
      let brand_id =  document.getElementById('brand_id').value;
      
      let request = `\\car\\car-models?`;
      
      let params = '';
      if(automobile_type_id){
        params = params +`type_id=${automobile_type_id}`;
      }
      if(brand_id){
        params = params +`&brand_id=${brand_id}`;
      }
      
      let url = request+params;
      $.ajax({
            url,
            type: 'GET',
            beforeSend:function(xhr){
              $('#loading_model').show();
            },
            complete(xhr,status){
              $('#loading_model').hide();

            },
            dataType: 'json',
            success: function (res) {
                $('#car_model_id')
                    .find('option')
                    .remove()
                    .end();
                $('#car_model_id').append(`<option value="">Select Model</option>`);
                for (let i = 0; i < res.length; i++) {
                    $('#car_model_id').append(`<option value="${res[i].id}"> ${res[i].name}</option>`);
                }
            }
        });
    }
      
    //function attribute 
    //return struct group and features 
    function attribute(){
      let request = `\\attribute\\structure?`;
      let automobile_type_id =  document.getElementById('automobile_type_id').value;
      
      
      let params = '';
      if(automobile_type_id){
        let type = 'car';
        params = params +`id=${automobile_type_id}&&type=${type}`;
      }
      
      let url = request+params;
      console.log(url);
      $.ajax({
            url,
            type: 'GET',
            beforeSend:function(xhr){
              $('#loading_model').show();
            },
            complete(xhr,status){
              $('#loading_model').hide();

            },
            dataType: 'html',
            success: function (res) {
              $('#wiht_advance_search')
                    .find('div')
                    .remove()
                    .end();
                $('#wiht_advance_search').append(`${res}`);
            }

    });
    }

    </script>