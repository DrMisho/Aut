<div class="container">
    <form  method="POST" id="StoryForm" action="{{route('StoryStor')}}" name="register-form">
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text"  value="" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="add title for your story">
      <small id="helpId" class="form-text text-muted">Title for your story to display in first</small>
    </div>
    <div class="form-group">
      <label for="summary">summary</label>
      <input type="text"  value="" class="form-control" name="summary" id="" aria-describedby="helpId" placeholder="add summary for your story">
      <small id="helpId" class="form-text text-muted">summary for your story to display </small>
    </div>
    <div class="form-group">
      <label class="custom-file">
      <input class="my-pond mt-n3" value="" type="file" name="filepond" id="inputImage"  placeholder="Add Image" class="custom-file-input" aria-describedby="fileHelpId"/>
        <span class="custom-file-control">image span</span>
      </label>
      <small id="fileHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="col-md-12 mt-1">
          <button type="submit"
                  class="mt-2 btn btn-primary">@lang('silk_khan.submit_register')</button>
      </div>
       
    </form>
</div>
<script>

    $(function () {
        $.fn.filepond.registerPlugin(FilePondPluginImagePreview);
        $('.my-pond').filepond({
            server: {
                process: {
                    headers: {
                        "Accept-Language": document.querySelector('html').getAttribute('lang'),
                        "Accept": 'application/json',
                        "X-Requested-With": 'XMLHttpRequest',
                    },
                    url: `api/file-upload?uploader=company_image`
                },
                load: {
                    headers: {
                        "Accept-Language": document.querySelector('html').getAttribute('lang'),
                        "Accept": 'application/json',
                        "X-Requested-With": 'XMLHttpRequest',
                    },
                    url: `api/file-upload?uploader=story_image&file_id=`
                },
                revert: {
                    headers: {
                        "Accept-Language": document.querySelector('html').getAttribute('lang'),
                        "Accept": 'application/json',
                        "X-Requested-With": 'XMLHttpRequest',
                    },
                    url: `api/file-upload/?uploader=story_image`
                },
            }
        });
        $("#StoryForm").submit(function (event) {

event.preventDefault();

var post_url = $(this).attr("action");

var form_data = $(this).serialize();

$.post(post_url, form_data, function (response) {
    if (response.success) {

        window.location.href = "{{route('login')}}";
    } else {

        let m = response.message;
        message(m);
    }

});
});

     
  
</script>