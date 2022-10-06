@extends(config('contact-us.ParentViewMain'))
@section('header')
    <link href="{{url('/vendor/contact-us/css/custom.css')}}" rel="stylesheet">
@endsection

@section('content')
    @component('ContactUs::components.contact_us_component',[
    'dir'=>$dir,
    'contact_us_left'=>$contact_us_left,
    'companyInfo'=>$companyInfo,
    'logoPath'=>$logoPath,
    'contact_us_right'=>$contact_us_right,
    'headquarter'=>$headquarter,
    'countries'=>$countries,
    'cities'=>$cities,
    'states'=>$states,
    'lang'=>$lang,
    'companyLinks'=>$companyLinks
    ])
    @endcomponent
@endsection

@section('scripts')
    <script>
        var disableButton = () => {
            $('#submit').attr('disabled', true);
            $('#myg-recaptcha-response').val('');
        };
        var enableButton = () => {
            $('#submit').attr('disabled', false);
            $('#myg-recaptcha-response').val($('#g-recaptcha-response').val());
        };
    </script>
    <script src="{{url('/vendor/contact-us/js/custom_html5_messages.js')}}" defer></script>
@endsection

