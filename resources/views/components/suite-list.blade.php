<li class="{{ $liClass }}">
    <a class="animation" href="#">Solutions</a>
    <ul class="{{  $ulClass  }}">
        @foreach($suites as $suite)
            <li class="text-start">
                <a href="/suites/{{  $suite->suite_code  }}"> <img class="w-25 h-25" src="/{{ $suite->image_path }}" >  {{  $suite->name  }}</a>
            </li>
        @endforeach
    </ul>
</li>