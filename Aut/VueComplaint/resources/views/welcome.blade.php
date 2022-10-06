<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Complaint With Vue.js</title>
        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap4/bootstrap.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">--}}
        <!-- Styles -->
    </head>
    <body>
    <div id="app" class="container">
        {{--        <tab nav-link1="Show Complaints" nav-link2="Add Complaint"></tab>--}}
        <date-input   id="12" name="SSD"           input-class="form-control" label-class="text-danger">Complaint Date:</date-input>
        <text-area    id="15" name="mytextarea"    input-class="form-control" place-holder="this is new component for form" rows="5" column="15">Complaint Details:</text-area>
        <text-input   id="27" name="myfirsttext"   input-class="form-control" place-holder="this is my text input">Complaint Name:</text-input>
        <time-input   id="35" name="mytimeinput"   input-class="form-control" label-class="text-danger">Complaint Time:</time-input>
        <number-input id="52" name="mynumberinput" input-class="form-control" label-class="text-success">Complaint Numbers:</number-input>
        <select-input input-class="form-control" label-class="text-success" input-text="text" input-value="id" :options="[{id:1,text:'A'},{id:12,text:'b'}, {id:5,text:'c'}]">Select Category of Complaints:</select-input>
        <form-button  id="85" b-class="btn-primary">Save Complaint:</form-button>
        <btn-modal modal="#myFirstModal" b-class="btn-primary" >Save</btn-modal>
        <modal id="myFirstModal">
            <div slot="header">Information of Complaint</div>
                        <p>Complaint Name:Water Complaint</p>
                        <p>Complaint Date: 4/4/2010</p>
                        <p>Details: I have a form on the site and after sending the message I want to present a message of success or failure. But the message is not coming back.
                                 condition in function
                        </p>
        </modal>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    {{--    <script src="{{$lang}}/js/lang.js" id="lang"></script>--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/complaint/dropzone.js') }}"></script>
    <script>
    </script>
    </body>
</html>
<script>
</script>
