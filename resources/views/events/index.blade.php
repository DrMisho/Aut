<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                    class="hero-inner__bg hero-inner__bg_three"
                    data-bg-image="theme/images/bg/events.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">Events</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Company
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Events
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Hero inner End ======= -->

        <section class="team pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <h1 class="section-heading__title_big mb-30"><span class="text-primary">ALWAYS ….WORK</span> AND HAVE <span class="text-primary">FUN</span></h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="case-area case-bg--chose pt-130 pb-95">
            <div class="container">
                <div class="row">
                    @foreach($events as $event)
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="case-choose">
                            <div class="case-choose__thumb image">
                                <a href="case-details.html">
                                    <img
                                            src="/theme/images/case/feature-chose-thub-1.jpg"
                                            alt="Case Details"
                                            width="545"
                                            height="398"
                                    />
                                </a>
                            </div>
                            <div class="case-choose__content">
                                <h3 class="heading">
                                    <a href="services-details-02.html"
                                    >{!! $event->translate('en')->title !!}</a>
                                </h3>
                                <p class="paragraph">
                                    {!! $event->translate('en')->description !!}
                                </p>
                                <span>{!! $event->city->translate('en')->name !!} | {!! $event->translate('en')->location !!}</span>
                                <br>
                                <a class="link" href="services-details.html"
                                >View Event</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {!! $events->links() !!}
            </div>
        </section>

    </main>

</x-layout>