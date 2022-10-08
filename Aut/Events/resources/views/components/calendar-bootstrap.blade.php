<meta charset='utf-8'/>

@if(config('Events.calendar-bootstrap')=='3')
    {{-- bootstrap 3--}}
<link href='{{asset('fullcalendar-3.5.0/fullcalendar.min.css')}}' rel='stylesheet'/>
<link href='{{asset('fullcalendar-3.5.0/fullcalendar.print.min.css')}}' rel='stylesheet' media='print'/>

<script src='{{asset('fullcalendar-3.5.0/lib/moment.min.js')}}'></script>
<script src='{{asset('fullcalendar-3.5.0/lib/jquery.min.js')}}'></script>
<script src='{{asset('fullcalendar-3.5.0/fullcalendar.min.js')}}'></script>
<script src='{{asset('fullcalendar-3.5.0/locale-all.js')}}'></script>


<script>

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "getLang",
            success: function (data) {
               var language = data;
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listWeek'
                    },
                    locale: language,
                    defaultDate: Date.now(),
                    navLinks: true, // can click day/week names to navigate views
                    editable: false,
                    weekNumbers: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: JSON.parse(document.getElementById('HiddenId').value),
                });
            }
        });
    });

</script>

</head>

{{-- bootstrap 4 --}}
@else
<link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='{{asset('fullcalendar/packages/core/main.css')}}' rel='stylesheet'/>
<link href='{{asset('fullcalendar/packages/bootstrap/main.css')}}' rel='stylesheet'/>
<link href='{{asset('fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet'/>
<link href='{{asset('fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet'/>
<link href='{{asset('fullcalendar/packages/list/main.css')}}' rel='stylesheet'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='{{asset('fullcalendar/packages/core/main.js')}}'></script>
<script src='{{asset('fullcalendar/packages/interaction/main.js')}}'></script>
<script src='{{asset('fullcalendar/packages/bootstrap/main.js')}}'></script>
<script src='{{asset('fullcalendar/packages/daygrid/main.js')}}'></script>
<script src='{{asset('fullcalendar/packages/timegrid/main.js')}}'></script>
<script src='{{asset('fullcalendar/packages/list/main.js')}}'></script>
<script>

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar;

        $.ajax({
            type: "GET",
            url: "getLang",
            success: function (data) {
              var  language = data;
                calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list'],
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                    },
                    locale:language,
                    defaultDate: Date.now(),
                    weekNumbers: true,
                    navLinks: true, // can click day/week names to navigate views
                    editable: false,

                    eventLimit: true, // allow "more" link when too many events
                    events: JSON.parse(document.getElementById('HiddenId').value),
                });
                calendar.render();
            }});



    });

</script>
@endif

<body >
<input  hidden id="HiddenId" value="{{$events}}"  />

<div id='calendar'></div>

</body>
