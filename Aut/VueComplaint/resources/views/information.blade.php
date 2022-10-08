@if($getRequestAttributesValues['values']!= [])
    @foreach($getRequestAttributesValues['values'] as $key=>$data)
        @if( $data['ATTRIBUTES']!=[] )
            <fieldset>
                <legend>{{ $data['GROUP_NAME'] }}</legend>
                @foreach($data['ATTRIBUTES'] as $index=>$attribute)
                    <p>{{ $attribute['ATTRIBUTE_NAME'] }} : {{ $attribute['VALUE'] }}</p>
                @endforeach
            </fieldset>
        @endif
    @endforeach
@endif

@if($getRequestAttributesValues['files'] != [])
    <fieldset>
        <legend>@lang("complaint::complaint.files")</legend>
        @foreach($getRequestAttributesValues['files'] as $index=>$file)
            <a href="{{ $imagePathUrl . $file['PATH']}}" download="{{ $file['FILE_NAME'] }}">{{$file['FILE_NAME']}}</a><br>
        @endforeach
    </fieldset>
@endif
