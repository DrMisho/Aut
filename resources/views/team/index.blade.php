<x-layout :title="$title">

        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper">
            <!-- ======= Hero inner Start ======= -->
            <section class="hero-inner">
                <div
                        class="hero-inner__bg hero-inner__bg_three"
                        data-bg-image="theme/images/bg/inner-bg-5.jpg"
                >
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-breadcrumb">
                                    <h1 class="heading">Our Team</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="index.html">Pages</a>
                                            </li>
                                            <li
                                                    class="breadcrumb-item active"
                                                    aria-current="page"
                                            >
                                                Our Team
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

            <!-- ======= Team Area Start ======= -->
            <section class="team pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="section-heading text-center mb-70">
                              <span class="section-heading__title_small">
                                {{  strip_tags($page->translate('en')->subtitle) }}
                              </span>
                                <h2 class="section-heading__title_big">
                                {{  strip_tags($page->translate('en')->content)  }}
                                </h2>
                            </div>
                        </div>
                        @foreach($teams as $team)
{{--                            @foreach($team->socialNetworks as $social)--}}
{{--                            {{  $social->translate('en')->name  }}--}}
{{--                            @endforeach--}}
                        <x-team_member
                                src="{{  $team->image_path  }}"
                                position="{{ $team->jobTitle->translate('en')->name }}"
                                name="{{  $team->translate('en')->name  }}"
                                :socialNetworks="$team->socialNetworks"
                        />

                        @endforeach
                    </div>
                </div>
            </section>
            <!-- ======= Team Area End ======= -->

            <x-good_at/>

            <!-- ======= Contact Area Start ======= -->
            <section
                    class="contact contact--agency"
                    data-bg-image="theme/images/bg/contact-bg.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="contact__agency">
                    <span class="title text-white"
                    >We are here to answer your questions 24/7</span
                    >
                                <h2 class="heading text-white">NEED A CONSULTATION?</h2>
                                <a
                                        href="contact.html"
                                        class="btn btn--common btn--default btn--primary"
                                >
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Contact Area End ======= -->
        </main>
        <!-- ======= Main Wrapper End ======= -->

    </x-layout>