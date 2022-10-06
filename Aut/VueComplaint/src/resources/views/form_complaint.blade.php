@foreach($requestGroups as $groupIndex => $group)
    @if($requestGroups[$groupIndex]['ATTRIBUTES']!= [])
        <fieldset>
            <legend>{{$group['GROUP_NAME']}}</legend>
            @foreach($requestGroups[$groupIndex]['ATTRIBUTES'] as $key=>$attribute)
                @switch($attribute['DATA_TYPE'])
                    @case ('DATE')
                    <bs-date  id="DateInput"   class="form-group col-md-5" labelClass="text-info" :name="$attribute['REQUEST_ATT_GROUP_ID']" inputClass="form-control" :required="$attribute['ATTRIBUTE_REQUIRED']" :value="$attribute['DEFAULT_VALUE']" >
                        {{ $attribute["ATTRIBUTE_NAME"] }} :
                    </bs-date>
                    @break
                    @case ('LIST')
                    @foreach ($attribute['DATA_ARRAY'] as $key=>$value)
                        @php $selectCategory[$value['ATTRIBUTE_LIST_ID']]=$value['LIST_VALUE_NAME'] @endphp
                    @endforeach
                    <bs-select class="form-group col-md-5"  :options="$selectCategory"  id="SelectInput" inputClass="form-control"  :name="$attribute['REQUEST_ATT_GROUP_ID']" labelClass="text-info" prevalue>
                        {{ $attribute["ATTRIBUTE_NAME"] }} :
                    </bs-select>
                    @break
                    @case ('NUM')
                    <bs-number  id="NumberInput"   class="form-group col-md-5" :name="$attribute['REQUEST_ATT_GROUP_ID']" inputClass="form-control"   labelClass="text-info" :required="$attribute['ATTRIBUTE_REQUIRED']" :value="$attribute['DEFAULT_VALUE']">
                        {{  $attribute["ATTRIBUTE_NAME"]  }} :
                    </bs-number>
                    @break
                    @case ('TEXT')
                    <bs-text  id="TextInput" class="form-group col-md-5" :name="$attribute['REQUEST_ATT_GROUP_ID']" inputClass="form-control" labelClass="text-info" :required="$attribute['ATTRIBUTE_REQUIRED']" :value="$attribute['DEFAULT_VALUE']">
                        {{  $attribute["ATTRIBUTE_NAME"]  }} :
                    </bs-text>
                    @break
                    @case ('LTXT')
                    <bs-textarea  id="TextAreaInput" class="form-group col-md-5" :name="$attribute['REQUEST_ATT_GROUP_ID']"  inputClass="form-control"  labelClass="text-info" rows="7" columns="6" :required="$attribute['ATTRIBUTE_REQUIRED']">
                        {{  $attribute["ATTRIBUTE_NAME"]   }} :
                        <slot name="value">
                            {{ $attribute['DEFAULT_VALUE'] }}
                        </slot>
                    </bs-textarea>
                    @break
                    @case ('TIME')
                    <bs-time  id="TimeInput" class="form-group col-md-5" :name="$attribute['REQUEST_ATT_GROUP_ID']" inputClass="form-control"  labelClass="text-info" :required="$attribute['ATTRIBUTE_REQUIRED']" :value="$attribute['DEFAULT_VALUE']">
                        {{ $attribute["ATTRIBUTE_NAME"]  }} :
                    </bs-time>
                    @break
                    @case ('CRNC')
                    <bs-number  id="CRNCInput"   class="form-group col-md-5" :name="$attribute['REQUEST_ATT_GROUP_ID']" inputClass="form-control"   labelClass="text-info" :required="$attribute['ATTRIBUTE_REQUIRED']" :value="$attribute['DEFAULT_VALUE']">
                        {{  $attribute["ATTRIBUTE_NAME"]    }} :
                    </bs-number>
                    @break
                    @case ('DAYS')
                    <bs-number  id="DaysInput"   class="form-group col-md-5" :name="$attribute['REQUEST_ATT_GROUP_ID']" inputClass="form-control"   labelClass="text-info" :required="$attribute['ATTRIBUTE_REQUIRED']" :value="$attribute['DEFAULT_VALUE']">
                        {{  $attribute["ATTRIBUTE_NAME"]    }} :
                    </bs-number>
                    @break
                    @default
                @endswitch
            @endforeach
        </fieldset>
    @endif
@endforeach
