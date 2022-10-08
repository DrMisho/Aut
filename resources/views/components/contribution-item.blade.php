<div class="col">
    <div class="case-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
        <div class="case-item__image">
            <a class="doc-modal" href="#">
                <img width="712" height="763" src="{{  $contribution->image_path  }}" alt="{{  $contribution->translate('en')->name  }}" />
            </a>
        </div>
        <div class="case-item__content secondary-bg-color text-center">
            <h5 class="text-white">
                <a href="#">{!! $contribution->translate('en')->name !!}</a>
            </h5>
            <span>{{  $contribution->contribution_date  }}</span>
            <br>
            <span class="btn" onclick="location.href='{{$contribution->file_path}}';" >Read More</span>
        </div>
    </div>
</div>

