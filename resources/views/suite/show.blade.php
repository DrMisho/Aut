<x-layout :title="$title">

    <main class="main-wrapper overflow-hidden">

        <section class="hero-inner">
            <div
                    class="hero-inner__bg hero-inner__bg_three"
                    data-bg-image="/theme/images/bg/suites.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">{{  $suite->translate('en')->long_name  }}</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Solutions</a>
                                        </li>
                                        <li
                                                class="breadcrumb-item active"
                                                aria-current="page"
                                        >
                                            {{  $suite->translate('en')->name  }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="services-key services-key--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-heading text-center mb-30">
                            <span class="section-heading__title_small">
                                We Offer best ERP Solution
                            </span>
                            <h2 class="section-heading__title_big">
                                The Changing Face of Information System IT
                            </h2>
                    </div>
                </div>
            </div>
            <div class="services-key__navbar">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="services-key__navbar_nav nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item services-key__navbar_item" role="presentation">
                                <button class="services-key__navbar_link nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="flaticon flaticon-development"></i> Vision
                                </button>
                            </li>
                            <li class="nav-item services-key__navbar_item" role="presentation">
                                <button class="services-key__navbar_link nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="flaticon flaticon-tech"></i> Modules
                                </button>
                            </li>
                            <li class="nav-item services-key__navbar_item" role="presentation">
                                <button class="services-key__navbar_link nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon flaticon-settings"></i> Requirements
                                </button>
                            </li>
                            <li class="nav-item services-key__navbar_item" role="presentation">
                                <button class="services-key__navbar_link nav-link" id="awards-tab" data-bs-toggle="tab"
                                        data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false">
                                    <i class="flaticon flaticon-medal"></i> Features
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
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        {!!  $suite->translate('en')->vision  !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <section class="faq pb-40">
                                    <div class="container">
                                        @foreach($suite->suiteSolutions as $suite)
                                        <div class="row">
                                            <div class="col-lg-6 offset-lg-3">
                                                <div class="section-heading text-center mb-20">
                                                    <span class="section-heading__title_small">
                                                      {{  $suite->solution->translate('en')->name  }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach($suite->modules as $module)
                                            <div class="col-lg-4 mb-30">
                                                <div class="faq-accordion">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading{{$module->module->module_code}}">
                                                                <button
                                                                        class="accordion-button collapsed"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse{{$module->module->module_code}}"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse{{$module->module->module_code}}"
                                                                >
                                                                    {{  $module->module->translate('en')->name  }}
                                                                </button>
                                                            </h2>
                                                            <div
                                                                    id="collapse{{$module->module->module_code}}"
                                                                    class="accordion-collapse animated fadeInUp collapse"
                                                                    aria-labelledby="heading{{$module->module->module_code}}"
                                                                    data-bs-parent="#accordionExample"
                                                            >
                                                                <div class="accordion-body">
                                                                    <p>
                                                                        {!!  $module->module->translate('en')->description  !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @endforeach
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                <x-requirement>
                                </x-requirement>

                            </div>

                            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">

                                <x-feature>

                                </x-feature>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ======= Service Key Area End ======= -->

    </main>
</x-layout>