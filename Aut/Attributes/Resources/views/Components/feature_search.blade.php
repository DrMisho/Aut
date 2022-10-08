<div>
  @if ( $feature['type_code'] == 'checkbox')
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='checkbox'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>
    @elseif ($feature['type_code'] == 'number_range')
      <div class="card border-primary">
        <div class="card-body">
          <h4 class="card-title">{{$feature['name']}}</h4>
          <p class="card-text row "><div class="col-md-6">from : {{$feature['min']}}</div><div class="col-md-6">to : {{$feature['max']}}</div></p>
          <div class="form-group">
            <label for="{{$id}}">price to search</label>
            <input type="text"
            attribute_type='number_range'
              class="form-control feature-search" name="{{$id}}" id="{{$id}}" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">select price in the range to search</small>
          </div>
        </div>
      </div>
    @elseif ($feature['type_code'] == 'date')
    <div class="card border-primary">
      <div class="card-body">
        <h4 class="card-title">{{$feature['name']}}</h4>
        <p class="card-text row "><div class="col-md-6">from : {{$feature['min']}}</div><div class="col-md-6">to : {{$feature['max']}}</div></p>
        <div class="form-group">
          <label for="{{$id}}">date to search</label>
          <input type="date"
          attribute_type='date'
            class="form-control feature-search" name="{{$id}}" id="{{$id}}" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">select date in the range to search</small>
        </div>
      </div>
    </div>


    @elseif ($feature['type_code'] == 'colors')
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='colors'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>
    
   
    @elseif ($feature['type_code'] == 'switch')
<div class="form-check">
  <label class="form-check-label form-check-inline">
    <input type="checkbox" attribute_type='switch' class="form-check-input  feature-search"  id="{{$id}}" value="true" checked>
    {{$feature['name']}}
  </label>
</div>   
<div class="form-group">
  <label for="sel1"> {{$feature['name']}}</label>
  <select  multiple  class="form-control  feature-search" id="{{$id}}" type='{{$feature["type_code"]}}' >
     @foreach($feature['option'] as $option)
       <option  value='{{$option["id"]}}'>{{$option['value']}}</option>
      @endforeach
 </select>
</div> 
    @endif
  
    {{-- @if ( $feature['type_code'] == 'text_with_lang'  )
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>
      

    @elseif ($feature['type_code'] == 'number'  )
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'   value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>

    @elseif ($feature['type_code'] == 'tel')
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>

    @elseif ($feature['type_code'] == 'url')
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>

    @elseif ($feature['type_code'] == 'number_range'   )
      <div class="card border-primary">
        <div class="card-body">
          <h4 class="card-title">{{$feature['name']}}</h4>
          <p class="card-text row "><div class="col-md-6">from : {{$feature['min']}}</div><div class="col-md-6">to : {{$feature['max']}}</div></p>
          <div class="form-group">
            <label for="{{$id}}">price to search</label>
            <input type="text"
              class="form-control feature-search" name="{{$id}}" id="{{$id}}" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">select price in the range to search</small>
          </div>
        </div>
      </div>
    @elseif ($feature['type_code'] == 'data_range'   )
    <div class="card border-primary">
      <div class="card-body">
        <h4 class="card-title">{{$feature['name']}}</h4>
        <p class="card-text row "><div class="col-md-6">from : {{$feature['min']}}</div><div class="col-md-6">to : {{$feature['max']}}</div></p>
        <div class="form-group">
          <label for="{{$id}}">date to search</label>
          <input type="date"
            class="form-control feature-search" name="{{$id}}" id="{{$id}}" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">select date in the range to search</small>
        </div>
      </div>
    </div>

    @elseif ($feature['type_code'] == 'date')
        
    <div class="card border-primary">
      <div class="card-body">
        <h4 class="card-title">{{$feature['name']}}</h4>
        <p class="card-text row "><div class="col-md-6">from : {{$feature['min']}}</div><div class="col-md-6">to : {{$feature['max']}}</div></p>
        <div class="form-group">
          <label for="{{$id}}">date to search</label>
          <input type="date"
            class="form-control feature-search" name="{{$id}}" id="{{$id}}" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">select date in the range to search</small>
        </div>
      </div>
    </div>

    @elseif ($feature['type_code'] == 'date_time'  )
    
    <div class="card border-primary">
      <div class="card-body">
        <h4 class="card-title">{{$feature['name']}}</h4>
        <p class="card-text row "><div class="col-md-6">from : {{$feature['min']}}</div><div class="col-md-6">to : {{$feature['max']}}</div></p>
        <div class="form-group">
          <label for="{{$id}}">date to search</label>
          <input type="date"
            class="form-control feature-search" name="{{$id}}" id="{{$id}}" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">select date in the range to search</small>
        </div>
      </div>
    </div>
    

    @elseif ($feature['type_code'] == 'time'  )
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>

    @elseif ($feature['type_code'] == 'text')
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>
    @elseif ($feature['type_code'] == 'email'  )
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>

    @elseif ($feature['type_code'] == 'color'  )
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>
    
   
    @elseif ($feature['type_code'] == 'switch')
<div class="form-check">
  <label class="form-check-label form-check-inline">
    <input type="checkbox" class="form-check-input  feature-search"  id="{{$id}}" value="true" checked>
    {{$feature['name']}}
  </label>
</div>   
   

    @elseif ($feature['type_code'] == 'select'  )
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select  multiple   class="form-control  feature-search" id="{{$id}}" type='{{$feature  ["type_code"]}}' >
            @foreach($feature['option'] as $option)
          <option     value="{{$option->id}}" >{{$option->value}}</option>
          @endforeach
        </select>
      </div>
    

    @elseif ($feature['type_code'] == 'values'  )
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>
      @elseif ($feature['type_code'] == 'list_select'  )
  
    @elseif ($feature['type_code'] == 'colors'  )
    {{$feature['type_code']}}    
    <div class="form-group">
        <label for="sel1"> {{$feature['name']}}</label>
        <select id="{{$id}}"  attribute_type='list'  value="" multiple class="form-control feature-search"  >
            @foreach($feature['option'] as $option)
          <option value="{{$option}}" >{{$option}}</option>
          @endforeach
        </select>
      </div>
    
    @endif --}}
    </div>