<div class="single-portfolio {{  $client->country->country_code_3  }} {{ $client->suite->suite_code }}" style="padding: 20px;" >
    <div class="case-item__image">
        <a href="#">
            <img class="w-100 h-100" src="{{  $client->logo_path  }}" alt="{{  $client->translate('en')->name  }}" />
        </a>
    </div>
    <div class="case-item__content secondary-bg-color text-center">
        <h5 class="text-white">
            <a href="#">{!! $client->translate('en')->name !!}</a>
        </h5>
        <br>
        <div class="text-center">
            <p class="text-white">
                <a class="text-white" href="{{ $client->website }}">Visit Website</a>
            </p>
        </div>
        <span class="btn" onclick="location.href='{{$client->file_path}}';" >Read Testimonial</span>
    </div>
</div>