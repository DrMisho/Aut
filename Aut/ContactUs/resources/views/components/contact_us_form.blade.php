<div style="text-align: {{$contact_us_left}}">
    <div class="col-md-8 ">
        <div class="">
            <h4 class="haedquarterTitle bottommargin-sm ">{{trans('ContactUs::contact-us.for_more')}}
                <span class="curious_blue_color">{{trans('ContactUs::contact-us.information')}}</span>
            </h4>
        </div>
        <div class="clear"></div>
        <div class="contact-widget customjs" data-alert-type="inline"
             data-captcha-invalid="The captcha field is not correct.">
            <form method="POST" action="{{route('contact_us.send_email')}}"
                  accept-charset="UTF-8">
                @csrf
                <div class="form-process"></div>
                <div class="row col-md-12 float-{{$contact_us_left}}">
                    <div class="col-md-4 form-group float-{{$contact_us_left}}">
                        <label for="full_name">{{trans('ContactUs::contact-us.f_name')}}
                            <small>*</small>
                        </label>
                        <input type="text" id="full_name" name="full_name"
                               minlength="4" maxlength="100" required
                               data-trans-required="{{
                           trans('ContactUs::html5_validation_messages.required')
                           .','
                           .trans('ContactUs::html5_validation_messages.minlength',['length'=>5])
                           .','
                           .trans('ContactUs::html5_validation_messages.maxlength',['length'=>100])
                           }}"
                               class="html5Validate form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}"
                        >

                        @if ($errors->has('full_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-4 form-group float-{{$contact_us_left}}">
                        <label for="mobile">{{trans('ContactUs::contact-us.mobile')}} <small> *</small></label>
                        <input type="text" id="mobile" name="mobile" value="" required
                               class="html5Validate form-control {{ $errors->has('mobile') ? ' is-invalid' : '' }}"
                               data-trans-required="{{trans('ContactUs::html5_validation_messages.required')}}">
                        @if ($errors->has('mobile'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="email">{{trans('ContactUs::contact-us.email')}}
                            <small>*</small>
                        </label>
                        <input type="email" id="email" name="email"
                               pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$"
                               class="html5Validate email form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               minlength="6" maxlength="100" required
                               data-trans-required="{{
                           trans('ContactUs::html5_validation_messages.required')
                           .','
                           .trans('ContactUs::html5_validation_messages.email')
                           .','
                           .trans('ContactUs::html5_validation_messages.minlength',['length'=>6])
                           .','
                           .trans('ContactUs::html5_validation_messages.maxlength',['length'=>100])
                           }}"
                        >
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="row col-md-12 float-{{$contact_us_left}}">
                    <div class="col-md-4 form-group float-{{$contact_us_left}}">
                        <label for="country_id">{{trans('ContactUs::contact-us.country')}}
                            <small>*</small>
                        </label>
                        <select id="country_id"
                                required
                                class="html5Validate form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                name="country_id" style="height: auto"
                                data-trans-required="{{
                           trans('ContactUs::html5_validation_messages.required_select')
                           }}">
                            <option selected="selected"
                                    value="">{{trans('ContactUs::contact-us.select_one')}}</option>
                            @foreach($countries as $country)
                                <option value="{{$country['id']}}">{{$country['name']}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('country_id'))
                            <span class="invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="col-md-4 form-group float-{{$contact_us_left}}">
                        <label for="city">{{trans('ContactUs::contact-us.city')}}</label>
                        <select id="city_id"
                                name="city_id" style="height: auto">
                            <option selected="selected"
                                    value="">{{trans('ContactUs::contact-us.select_one')}}</option>
                            @foreach($cities as $city)
                                <option value="{{$city['id']}}">{{$city['name']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 form-group float-{{$contact_us_right}}">
                        <label for="state">{{trans('ContactUs::contact-us.state')}}</label>
                        <select id="state_id"
                                name="state_id" style="height: auto">
                            <option selected="selected"
                                    value="">{{trans('ContactUs::contact-us.select_one')}}</option>
                            @foreach($states as $state)
                                <option value="{{$state['id']}}">{{$state['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row col-md-12 form-group float-{{$contact_us_left}}">
                    <div class="col-md-4 form-group float-{{$contact_us_left}}">
                        <label for="to">{{trans('ContactUs::contact-us.to')}}
                            <small>*</small>
                        </label>
                        <select id="link_id"
                                required
                                class="html5Validate form-control{{ $errors->has('to') ? ' is-invalid' : '' }}"
                                name="link_id" style="height: auto"
                                data-trans-required="{{
                           trans('ContactUs::html5_validation_messages.required_select')
                           }}">
                            <option selected="selected"
                                    value="">{{trans('ContactUs::contact-us.select_one')}}
                            @foreach($companyLinks as $companyLink)
                                <option value="{{$companyLink->id}}">{{$companyLink->value}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('link_id'))
                            <span class="invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $errors->first('link_id') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12 form-group">
                    <label for="subject">{{trans('ContactUs::contact-us.subject')}}
                        <small>*</small>
                    </label>
                    <input type="text" id="subject" name="subject"
                           minlength="2" maxlength="200" required
                           class="html5Validate form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}"
                           data-trans-required="{{
                           trans('ContactUs::html5_validation_messages.required')
                           .','
                           .trans('ContactUs::html5_validation_messages.minlength',['length'=>2])
                           .','
                           .trans('ContactUs::html5_validation_messages.maxlength',['length'=>200])
                           }}">
                    @if ($errors->has('subject'))
                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                    @endif
                </div>


                <div class="col-md-12 form-group">
                    <label for="message">{{trans('ContactUs::contact-us.message')}}
                        <small>*</small>
                    </label>
                    <textarea
                            class="html5Validate form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"
                            id="message1"
                            name="message" rows="6" cols="30"
                            minlength="10" maxlength="1000" required
                            data-trans-required="{{
                           trans('ContactUs::html5_validation_messages.required')
                           .','
                           .trans('ContactUs::html5_validation_messages.minlength',['length'=>10])
                           .','
                           .trans('ContactUs::html5_validation_messages.maxlength',['length'=>1000])
                           }}"
                    ></textarea>
                    @if ($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                    @endif
                </div>

                <input class="form-control" id='myg-recaptcha-response' type="hidden"
                       name="myg-recaptcha-response">

                <div class="col-md-12 form-group">
                    {!! Recaptcha::render(['lang' =>$lang, 'callback' =>'enableButton','expired-callback'=>'disableButton']) !!}
                    @if ($errors->has('myg-recaptcha-response'))
                        <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $errors->first('myg-recaptcha-response') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="col-md-12 form-group">
                    <button class="btn btn-primary sendButton" type="submit" id="submit" disabled>
                        {{trans('ContactUs::contact-us.send_message')}}
                    </button>
                </div>
            </form>
            <div class="clear"></div>
            <div class="contact-form-result"></div>
        </div>
    </div>
</div>
