<html>
<head>

</head>
<body>
<div style="width: 900px; height: 900px" >
    @component('Events::components.calendar-bootstrap')
        @slot('events')
            {{$events}}
        @endslot
    @endcomponent
</div>
</body>
</html>