<x-layout :title="$title">

    <main class="main-wrapper">

        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                    class="hero-inner__bg hero-inner__bg_three"
                    data-bg-image="/theme/images/bg/news.jpeg"
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
                <div class="row blog-details">
                    <div class="col-lg-8 col-sm-12 mx-auto">
                        <div class="blog-details--no-sidebar">
                            <img
                                    class="blog-item__img mb-45"
                                    width="1170"
                                    height="660"
                                    src="/{{ $news->image_path }}"
                                    alt="{{ $news->translate('en')->title }}"
                            />
                        </div>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <div class="mb-30">
                            <header class="header">
                                <ul class="meta mb-10 text-center">
                                    <li class="blog-item__list list">
                                        <i class="far fa-calendar-alt"></i>
                                        <span class="name name--dates">{{ $news->publish_at }}</span>
                                    </li>
                                </ul>
                            </header>
                            <article>
                                <h2 class="title title--big mb-10 text-center">
                                    {{ $news->translate('en')->title }}
                                </h2>
                                <p class="paragraph mb-30">
                                    {!! $news->translate('en')->content !!}
                                </p>
                            </article>
                            <footer>
                                <div class="row align-items-center pt-30">
                                    <div class="col-lg-6 mb-30">
                                        <div class="tags">
                                            <div class="tag-list">
                                                @foreach($news->tag as $tag)
                                                    <a href="#" class="tag-link">{{ $tag->translate('en')->name }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</x-layout>