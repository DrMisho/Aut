
<div class="col-md-4 t{{$contact_us_left}}" style="float:{{$contact_us_left}}">
    <div class="curious_blue_color">
        <h4 class="haedquarterTitle mb-0"><span>{{trans('ContactUs::contact-us.head')}}</span></h4>
        <img class="companyLogo" src="{{$logoPath}}">
    </div>

    <div class="row bottommargin-sm">
        <div class="col-sm-2  nopadding t700 t{{$contact_us_right}}">{{trans('ContactUs::contact-us.address')}}:
        </div>
        <div class="col-sm-8 t{{$contact_us_left}}">
            {!! $headquarter->address !!}
        </div>
    </div>
    <div class="row bottommargin-sm">
        <div class="col-sm-2  nopadding t700 t{{$contact_us_right}}">{{trans('ContactUs::contact-us.phone')}}:
        </div>
        <div style="direction: ltr;" class="col-sm-8 t{{$contact_us_left}}">{{$headquarter->phone}}</div>
    </div>
    <div class="row bottommargin-sm">
        <div class="col-sm-2  nopadding t700 t{{$contact_us_right}}">{{trans('ContactUs::contact-us.fax')}}:
        </div>
        <div style="direction: ltr;" class="col-sm-8 t{{$contact_us_left}}">{{$headquarter->fax}}</div>
    </div>
</div>
