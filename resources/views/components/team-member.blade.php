<div class="col-lg-4 col-md-6 mb-30">
    <div class="team-block">
        <div class="image">
            <img
                    width="545"
                    height="663"
                    class="image__member"
                    src="{{  $team->image_path  }}"
                    alt="Team Member"
            />
            <div class="social">
                <ul>
                    @foreach($team->socialNetworks as $social)
                        <li>
                            <a href="{{$social->pivot->account}}">
                                <i class="{{  $social->icon->code  }}"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="content">
            <span class="designation">{{  $team->jobTitle->translate('en')->name  }}</span>
            <h3 class="name">{{  $team->translate('en')->name  }}</h3>
        </div>
    </div>
</div>