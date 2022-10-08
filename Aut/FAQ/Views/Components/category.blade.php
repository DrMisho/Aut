<nav class="nav nav-tabs nav-stacked row">
    @foreach ($categories as $key=> $category)
        @if($key==0)
            <a class="nav-link active col-md-12" href='http://localhost:8000/faqs/test?category_id={{ $category->id}}'>{{ $category->name }}</a>
        @else
            <a class="nav-link col-md-12 " href='http://localhost:8000/faqs/test?category_id={{ $category->id}}'>{{ $category->name }}</a>
        @endif
    @endforeach
</nav>
