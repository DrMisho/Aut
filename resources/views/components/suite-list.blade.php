<li class="{{ $liClass }}">
    <a class="animation" href="#">Solutions</a>
    <ul class="{{  $ulClass  }}">
        @foreach($suites as $suite)
            <li class="text-start">
                <a href="/suites/{{  $suite->suite_code  }}"> <img src="/theme/images/icon/{{$suite->suite_code}}.png" style="width: 30%; height: 30%;">  {{  $suite->translate('en')->name  }}</a>
            </li>
        @endforeach
    </ul>
</li>