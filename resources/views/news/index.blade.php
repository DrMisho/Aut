<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                class="hero-inner__bg hero-inner__bg_three"
                data-bg-image="theme/images/bg/news.jpeg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">News</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="/">Home</a>
                                        </li>
                                        <li
                                            class="breadcrumb-item active"
                                            aria-current="page"
                                        >
                                            News
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog pt-130 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($news as $new)
                    <div class="col-lg-4 col-md-6 blog-item__column mb-30">
                        <div class="blog-item blog-item--software">
                            <header class="blog-item__header header">
                                <a
                                        href="javascript:void(0);"
                                        class="blog-item__img_link link link--image"
                                >
                                    <img
                                            width="551"
                                            height="395"
                                            class="blog-item__img"
                                            src="{{ $new->image_path }}"
                                            alt="{{ $new->translate('en')->title }}"
                                    />
                                </a>
                                <ul class="meta">
                                    <li class="blog-item__list list">
                                        <i class="far fa-user icon"></i>
                                        <span class="name name--poster">{{ $new->city->translate('en')->name }}</span>
                                    </li>
                                    <li class="blog-item__list list">
                                        <i class="far fa-calendar icon"></i>
                                        <span class="name name--dates">{{ $new->publish_at }}</span>
                                    </li>
                                </ul>
                            </header>
                            <article class="blog-item__article content">
                                <h3 class="blog-item__title">
                                    <a href="blog-details.html">
                                        {{ $new->translate('en')->title }}
                                    </a>
                                </h3>
                                <p class="blog-item__text">
                                   {!! substr($new->translate('en')->content, 0, $length = 100) !!}.....
                                </p>
                                @foreach($new->tag as $tag)
                                <span class="tags"><a href="#">{{ $tag->translate('en')->name }}</a>,</span>
                                @endforeach
                                <br>
                                <span class="tags"><a href="/news/{{$new->id}}">View Details</a>,</span>
                            </article>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="justify-content-center align-content-center">
                            {!! $news->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

</x-layout>