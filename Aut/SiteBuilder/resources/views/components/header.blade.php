<div id="topBar">
    <div class="container">
        <ul class="top-links list-inline float-right">
            <li>
                <a><i class="fa fa-youtube"></i></a>
            </li>
            {{--@if(setting('facebook_page')->value)
                <li>
                    <a target="_blank" href="{{setting('facebook_page')->value}}"><i class="fa fa-facebook"></i></a>
                </li>
            @endif

            @if(setting('wiki_page')->value)
                <li>
                    <a target="_blank" href="{{setting('wiki_page')->value}}"><i class="fa fa-wikipedia-w"></i></a>
                </li>
            @endif

            @if(setting('google_account')->value)
                <li>
                    <a target="_blank" href="{{setting('google_account')->value}}"><i class="fa fa-google-plus"></i></a>
                </li>
            @endif

            @if(setting('youtube_channel')->value)
                <li>
                    <a target="_blank" href="{{setting('youtube_channel')->value}}"><i class="fa fa-youtube"></i></a>
                </li>
            @endif--}}
        </ul>

        <ul class="top-links list-inline">
            <li>
                <a class="dropdown-toggle no-text-underline" data-toggle="dropdown"><img class="flag-lang" src="{{ asset("images/flags/{$locale}.png") }}" width="16" height="11" alt="{{ $native }}" /> {{ $native }}</a>
                <ul class="dropdown-langs dropdown-menu">
                    @foreach($supportedLocales as $localeCode => $properties)
                        <li>
                            <a hreflang="{{ $localeCode }}" tabindex="-1" href="{{ $getTranslatedRoute($localeCode) }}">
                                <img class="flag-lang" src="{{ asset("images/flags/{$localeCode}.png") }}" width="16" height="11" alt="{{ $properties['native'] }}" /> {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="mailto:me@to.com"><i class="bi bi-envelop"></i>{{ 'me@to.com' }}</a>
            </li>
            {{--<li>
                <a href="mailto:{{ $footer->contact->email ?? '' }}"><i class="bi bi-envelop"></i>{{ $footer->contact->email ?? '' }}</a>
            </li>
            <li>
                <a class="number" href="tel:{{ $footer->contact->phone ?? '' }}"><i class="bi bi-phone"></i>{{ $footer->contact->phone ?? '' }}</a>
            </li>--}}
        </ul>
    </div>
</div>

<div id="header" class="navbar-toggleable-md sticky shadow-after-3 clearfix">
    <header id="topNav">
        <div class="container">
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="float-right nav nav-pills nav-second-main">
                <li class="search">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box">
                        <form action="{{ route('search') }}" method="get">
                            <div class="input-group">
                                <input type="text" id="searchinput" name="s" placeholder="Enter Your Search" class="form-control" />
                                <span class="input-group-btn">
                                    <button class="btn btn-blue" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
            <a class="logo float-left" href="{{ route(\Aut\SiteBuilder\SiteBuilder::$homePage) }}">
                <img style="{{ $style }}" src="{{ asset($logo) }}" alt="" />
            </a>
            <x-site-builder-menu />
        </div>
    </header>
</div>
