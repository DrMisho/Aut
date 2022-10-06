<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    @if($dir == 'rtl')
        <link href="{{asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    @endif
    <link href="{{ asset('vendor/complaint/dropzone.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container">
        <complaint-tab></complaint-tab>
    </div>

{{--    <text-input :place-holder ="{{ json_encode($skills) }}">The Skills:</text-input>--}}

    <modal id="information">
        <div slot="header">{{trans('complaint::complaint.information_of_complaint')}}</div>
        <div id="info_modal"></div>
    </modal>

    <modal id="timeline">
        <div slot="header">{{trans('complaint::complaint.timeline_of_complaint')}}</div>
        <div id="timeline_modal"></div>
    </modal>
</div>
    {{-------- JS --------}}
    <script src="{{ asset('js/app.js') }}"></script>
{{--    <script src="{{$lang}}/js/lang.js" id="lang"></script>--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/complaint/dropzone.js') }}"></script>
    <script>
        $('.complainedCategory').on('change', function (event) {
            event.preventDefault();
            var requestTypeId = $('.complainedCategory option:selected').val();
            var url = '{{route('get-category',':requestTypeId')}}';
            url = url.replace(':requestTypeId', requestTypeId);
            $('#ajax-content').load(url);
        });

        $('#information').on('show.bs.modal', function (event) {
            var $button = $(event.relatedTarget);
            $('#info_modal').html('');
            var $modal = $(this);
            var requestId = $button.attr('data-key');
            var url = '{{route('show-information',':requestId')}}';
            url = url.replace(':requestId', requestId);
            $('#info_modal').load(url);
        });

        $('#timeline').on('show.bs.modal', function (event) {
            var $button = $(event.relatedTarget);
            $('#timeline_modal').html('');
            var $modal = $(this);
            var requestId = $button.attr('data-key');
            var url = '{{route('show-timeline',':requestId')}}';
            url = url.replace(':requestId', requestId);
            $('#timeline_modal').load(url);
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        Dropzone.autoDiscover = true;
        Dropzone.options.dropzoneFileUpload = {
            url: "{{route('post-file')}}"
            , method: "POST"
            , headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            , clickable: true
            , previewsContainer: ".dropzone_preview"
            , parallelUploads: 10
            , maxFiles: 100
            , maxFilesize: 25
            , dictDefaultMessage: '@lang("complaint::complaint.file_upload")'
            , dictFileTooBig: '@lang("complaint::complaint.file_too_big")'
            , dictInvalidFileType: '@lang("complaint::complaint.file_invalid_type")'
            , acceptedFiles: 'image/*,application/pdf,.mp4'
            , addRemoveLinks: true
            ,init: function()
            {
                this.on('success', function(file, response) {
                    $("#formComplaint").append($('<input filename="' + response.fileName + '" '+' type="hidden" ' + 'name="files[]" ' + 'value="' + response.newFileName + '">'));
                });
            }
            ,removedfile: function(file) {
                var fileName = file.name;
                var newFileName = $('input[fileName="'+fileName+'"]').val();
                $.ajax({
                    type: 'delete',
                    url: "{{ route('file-delete') }}",
                    data: "newFileName="+newFileName,
                    dataType: 'html',
                    success:function () {
                        $('input[fileName="'+fileName+'"]').remove();
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            8}
        }

    </script>
</body>
</html>
