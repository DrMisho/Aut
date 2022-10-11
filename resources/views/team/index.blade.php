<x-layout :title="$title">

        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper">
            <!-- ======= Hero inner Start ======= -->
            <section class="hero-inner">
                <div
                        class="hero-inner__bg hero-inner__bg_three"
                        data-bg-image="/theme/images/bg/inner-bg-5.jpg"
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
            <section class="team pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 text-center">
                            <h1 class="section-heading__title_big mb-30"><span class="text-primary">PEOPLE…PEOPLE….AND PEOPLE</span></h1>
                            <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Our people are the basis of our success as they have the passion always to meet the efficient measures of success
                        </span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        @foreach($teams as $team)
                        <x-team-member
                                :team="$team"
                        >
                        </x-team-member>

                        @endforeach
                    </div>
                </div>
            </section>
            <!-- ======= Team Area End ======= -->

            <x-good-at/>

            <!-- ======= Contact Area Start ======= -->
            <x-contact-us/>
            <!-- ======= Contact Area End ======= -->
        </main>
        <!-- ======= Main Wrapper End ======= -->

    </x-layout>