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

        <section class="case-area case-bg--chose pt-70 pb-95">
            <div class="container">
                <div class="row">
                    @foreach($events as $event)
                        <x-event-item :event="$event"/>
                    @endforeach
                </div>
                {!! $events->links() !!}
            </div>
        </section>

    </main>

</x-layout>