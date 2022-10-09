<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                class="hero-inner__bg hero-inner__bg_three"
                data-bg-image="theme/images/bg/clients.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">Clients</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Company
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Clients
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
                        <h1 class="section-heading__title_big mb-30">WE LOVE OUR <span class="text-primary">CLIENTS</span>, AND WE KNOW THEY <span class="text-primary">LOVE US </span>TOO</h1>
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Since teamwork is a keyword in the world of IT, Automata4 Group believes in working hand in hand with our clients
                            effectively, which is the standard methodology to achieve success in all our projects.
                            <br>
                            We believe that no work would be done without the considerable partnership with our clients,
                            embodying our philosophy of Client Centered Development of information systems. We hereby mention some of them:
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
                        <br><br>
                        <div class="col-sm-12 portfolio-menu" id="filters">
                            <ul class="services-key__navbar_nav nav nav-tabs" id="myTab" role="tablist">
                                <li data-filter="*" class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link active" id="all-tab" data-bs-toggle="tab"
                                            data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">
                                        All
                                    </button>
                                </li>
                                @foreach($countries as $country)
                                <li data-filter=".{{ $country->country_code_3 }}" class="nav-item services-key__navbar_item" role="presentation">
                                    <a class="services-key__navbar_link nav-link" id="local-tab"
                                       type="button" role="tab" aria-selected="true"
                                    >
                                        {{  $country->translate('en')->name  }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <br>
                            <ul class="services-key__navbar_nav nav nav-tabs" id="myTab" role="tablist">
                                <li data-filter="*" class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link active" id="all-tab" data-bs-toggle="tab"
                                            data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">
                                        All
                                    </button>
                                </li>
                                @foreach($suites as $suite)
                                    <li data-filter=".{{ $suite->suite_code }}" class="nav-item services-key__navbar_item" role="presentation">
                                        <a  class="services-key__navbar_link nav-link"
                                                type="button" role="tab" aria-selected="false">
                                            {{  $suite->translate('en')->name  }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services-key__tabbar pt-50" id="portfolio-items">
                    <div class="row">
                        @foreach($clients as $client)
                        <div class="col-lg-6 col-sm-12 pb-20">
                            <x-client-item :client="$client"></x-client-item>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </main>



</x-layout>