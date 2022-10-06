<h2 class="text-center topmargin-sm"><span class="curious_blue_color">{{trans('ContactUs::contact-us.branches')}}</span></h2>
<div class="card-deck row" style="text-align: {{$contact_us_left}}">
    @foreach ($companyInfo as $info)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="{{$info->logo}}" alt="Sunset Bulb Glow" class="card-img-top img-fluid portfolio-image">
            <div class="card-body portfolio-desc">
              <i class="fas fa-map-marker-alt">&nbsp;</i><span class="card-title">{!! $info->address !!}</span>
                <span style="display: block;direction: ltr;"><i class="fas fa-phone-alt"></i>
                    <span class="card-text text-muted">
                        <a href="tel:{{$info->phone}}">&nbsp;{{$info->phone}}</a>
                    </span>
                </span>
            </div>
        </div>
    @endforeach
</div>
