@props(['src', 'position', 'name', 'socialNetworks'])


<div class="col-lg-4 col-md-6 mb-30">
    <div class="team-block">
        <div class="image">
            <img
                    width="545"
                    height="663"
                    class="image__member"
                    src="{{  $src  }}"
                    alt="Team Member"
            />
            <div class="social">
                <ul>
                    @foreach($socialNetworks as $social)
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
            <span class="designation">{{  $position  }}</span>
            <h3 class="name">{{  $name  }}</h3>
        </div>
    </div>
</div>