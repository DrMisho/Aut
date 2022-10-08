<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                    class="hero-inner__bg hero-inner__bg_three"
                    data-bg-image="theme/images/bg/comp.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">Competitions</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Company
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Competitions
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
                        <h1 class="section-heading__title_big mb-30">OUR FEARFUL <span class="text-primary">COMPETITION</span> IS <span class="text-primary">OURSELVES</span></h1>
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Believing that innovation is the key for further advancing our industry and that some
                            remarkable technologies that are driving innovation across industries have come out of
                            development contests. Automata4 Group encourages its team member to always participate in
                            local and international IT and Business competitions in order for our employees to showcase
                            their Innovation.
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-bg-common pt-30 pb-40">
            <div class="container">
                <div class="services-key__navbar">
                    <div class="row">
                        <h4 class="section-software__title_small aos-item aos-init aos-animate mt-20 mb-30" data-aos="fade-up"
                            data-aos-duration="800" data-aos-delay="500">
                            Here is a list of latest competitions our team members participated in:
                        </h4>
                        <br>
                        <div class="col-sm-12">
                            <ul class="services-key__navbar_nav nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link active" id="all-tab" data-bs-toggle="tab"
                                            data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">
                                         All
                                    </button>
                                </li>
                                <li class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link" id="local-tab" data-bs-toggle="tab"
                                            data-bs-target="#local" type="button" role="tab" aria-controls="local" aria-selected="false">
                                        Local
                                    </button>
                                </li>
                                <li class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link" id="international-tab" data-bs-toggle="tab"
                                            data-bs-target="#international" type="button" role="tab" aria-controls="international" aria-selected="false">
                                        International
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services-key__tabbar pt-50">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    <div class="row">
                                        @foreach($competitions as $competition)
                                            <x-competition-item :competition="$competition">

                                            </x-competition-item>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="local" role="tabpanel" aria-labelledby="local-tab">
                                    <div class="row">
                                        @foreach($competitions as $competition)
                                            @if($competition->location_type == 'L')
                                            <x-competition-item :competition="$competition">

                                            </x-competition-item>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="international" role="tabpanel" aria-labelledby="international-tab">
                                    <div class="row">
                                        @foreach($competitions as $competition)
                                            @if($competition->location_type == 'I')
                                                <x-competition-item :competition="$competition">

                                                </x-competition-item>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
