<!-- ======= Service Key Area Start ======= -->
<section class="services-key pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-heading text-center mb-30">
              <span class="section-heading__title_small">
                    {{ __('message.service_box_title') }}
              </span>
                    <h2 class="section-heading__title_big">
                        {{ __('message.service_box_subtitle') }}
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
                                <i class="flaticon flaticon-settings"></i> {{ __('message.service_box_solution') }}
                            </button>
                        </li>
                        <li class="nav-item services-key__navbar_item" role="presentation">
                            <button class="services-key__navbar_link nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <i class="flaticon flaticon-tech"></i> {{ __('message.service_box_technology') }}
                            </button>
                        </li>
                        <li class="nav-item services-key__navbar_item" role="presentation">
                            <button class="services-key__navbar_link nav-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="flaticon flaticon-team"></i> {{ __('message.service_box_client') }}
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
                                <?php $i = 0.2 ?>
                                @foreach($suites as $suite)
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{$i}}s">
                                    <div class="services__item services-key__content mb-30">
                                        <div class="services__item_overlay services-key__content_overlay"></div>
                                        <header class="services__item_header services-key__content_header text-center">
                                            <div style="z-index: 3;position: relative;right: 5px;top: 5px; background: inherit">
                                                <img class="services__tech_icon" src="/theme/images/icon/{{ $suite->suite_code }}.png" alt="{{ $suite->name }}">
                                            </div>
                                            <h2 class="services__item_title services-key__content_title">
                                                <a href="/suites/{{ $suite->suite_code }}">{{ $suite->name }}</a>
                                            </h2>
                                        </header>
                                        <div class="services__item_content services-key__content_text">
                                            <p class="services__item_paragraph services-key__content_paragraph">
                                                {{ $suite->long_name }}
                                            </p>
                                            <a class="services-key__content_link" href="/suites/{{ $suite->suite_code }}">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                                    <?php $i++ ?>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="services__item services__tech text-center mb-30">
                                        <div class="services__item_overlay services__tech_overlay"></div>
                                        <header class="services__item_header mb-0">
                                            <i class="flaticon flaticon-website services__item_icon services__tech_icon"></i>
                                            <h4 class="services__item_title services__tech_title">
                                                <a href="services-details.html">Web Site</a>
                                            </h4>
                                        </header>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="services__item services__tech text-center mb-30">
                                        <div class="services__item_overlay services__tech_overlay"></div>
                                        <header class="services__item_header mb-0">
                                            <i class="flaticon flaticon-android services__item_icon services__tech_icon"></i>
                                            <h4 class="services__item_title services__tech_title">
                                                <a href="services-details.html">Android Apps</a>
                                            </h4>
                                        </header>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="services__item services__tech text-center mb-30">
                                        <div class="services__item_overlay services__tech_overlay"></div>
                                        <header class="services__item_header mb-0">
                                            <i class="flaticon flaticon-apple services__item_icon services__tech_icon"></i>
                                            <h4 class="services__item_title services__tech_title">
                                                <a href="services-details.html">ios Apps</a>
                                            </h4>
                                        </header>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="services-partners overflow-hidden mb-20">
                                <ul class="services-partners__wrapper overflow-hidden">
                                    @foreach($clients as $client)
                                    <li class="services-partners__item wow fadeInUp" data-wow-delay=".2s">
                                        <a class="" href="{{ $client->website }}"><img
                                                    src="/{{$client->logo_path}}" alt="" /></a>
                                    </li>
                                    {{-- more partners --}}
                                    @endforeach
                                </ul>
                                <div class="services__item_content services-key__content_text text-center">
                                    <a class="services-key__content_link" href="/clients">See All Clients</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Service Key Area End ======= -->