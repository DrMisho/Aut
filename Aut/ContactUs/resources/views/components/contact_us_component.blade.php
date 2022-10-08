@component('ContactUs::components.contact_us_title')
@endcomponent

@component('ContactUs::components.contact_us_map')
@endcomponent

<section id="content">
    <div class="content-wrap" dir="{{$dir}}">
        <div class="container clearfix">

            @if(config('contact-us.HaveMultiBranches'))
                @component('ContactUs::components.contact_us_branches',[
                    'contact_us_left'=>$contact_us_left,
                    'companyInfo'=>$companyInfo,
                ])
                @endcomponent
            @endif
            @if($headquarter)
                @component('ContactUs::components.contact_us_headquarter',[
                                'logoPath'=>$logoPath,
                                'contact_us_left'=>$contact_us_left,
                                'contact_us_right'=>$contact_us_right,
                                'headquarter'=>$headquarter,
                            ])
                @endcomponent
            @endif

            @component('ContactUs::components.contact_us_form',[
                                       'contact_us_left'=>$contact_us_left,
                                       'contact_us_right'=>$contact_us_right,
                                       'errors'=>$errors,
                                       'countries'=>$countries,
                                       'cities'=>$cities,
                                       'states'=>$states,
                                       'companyLinks'=>$companyLinks,
                                       'lang'=>$lang,
                                   ])
            @endcomponent

        </div>
    </div>
</section>
