<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                class="hero-inner__bg hero-inner__bg_three"
                data-bg-image="/theme/images/bg/clients.jpg"
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
                        <div class="col-sm-12 portfolio-menu" >
                            <ul class="services-key__navbar_nav nav nav-tabs" id="filtersCountry" role="tablist">
                                <li data-filter="*" class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link active" id="all-tab" data-bs-toggle="tab"
                                            data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">
                                        All
                                    </button>
                                </li>
                                @foreach($countries as $country)
                                <li data-filter=".{{ $country->country_code_3 }}" class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link" id="local-tab"
                                       type="button" role="tab" aria-selected="true"
                                    >
                                        {{  $country->name  }}
                                    </button>
                                </li>
                                @endforeach
                            </ul>
                            <br>
                            <ul class="services-key__navbar_nav nav nav-tabs" id="filtersSuite" role="tablist">
                                <li data-filter="*" class="nav-item services-key__navbar_item" role="presentation">
                                    <button class="services-key__navbar_link nav-link active" id="all-tab" data-bs-toggle="tab"
                                            data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">
                                        All
                                    </button>
                                </li>
                                @foreach($suites as $suite)
                                    <li data-filter=".{{ $suite->suite_code }}" class="nav-item services-key__navbar_item" role="presentation">
                                        <button  class="services-key__navbar_link nav-link"
                                                type="button" role="tab" aria-selected="false">
                                            {{  $suite->name  }}
                                        </button>
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

        <section
                class="review review-agency--bg pt-120 pb-100 primary-bg-color"
                data-bg-image="/theme/images/shape/testimonial-bg-home-3.png"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div
                                class="section-heading section-heading--startup text-center mb-45"
                        >
                <span class="section-heading__title_small white-bg">
                  Testimonials
                </span>
                            <h2 class="section-heading__title_big text-white">
                                What Our Customers Say About Us?
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row review-agency--active">
                    @foreach($client_say as $say)
                    <div class="col-12 mb-30">
                        <div class="review-block review-agency">
                            <div class="review-block__content content">
                                <i class="flaticon flaticon-right-quote quote"></i>
                                <p class="paragraph">
                                    {!! $say->say !!}
                                </p>
                                <div class="review-block__auth auth">
                                    <div class="review-block__auth_info info">
                                        <h3 class="review-block__auth_name">{{ $say->client_name }}</h3>
                                        <span class="review-block__auth_title">{{ $say->company }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>



</x-layout>