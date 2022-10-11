<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                    class="hero-inner__bg hero-inner__bg_three"
                    data-bg-image="/theme/images/bg/contribution.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">Contributions</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Company
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Contributions
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
                        <h1 class="section-heading__title_big mb-30"><span class="text-primary">WE BELIEVE </span>IN <span class="text-primary">GIVING</span></h1>
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Automata4 Group believe in our nation’s YOUTH, we strive to help them to enhance their skills and be able
                            to follow their passion and dreams. Doing so, will enhance our market and lift up our nation.
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <div class="support support--bg support--padding secondary-bg-color pt-95 parallaxie"
             data-bg-image="/theme/images/shape/support-bg-shape.png">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- ======= Solution Area End ======= -->

        <!-- ======= Case Studies Area Start ======= -->
        <section class="case case--minus pt-100 pb-125">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="section-heading section-heading--style3 mb-50">
                            <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                WHAT WE DID
                            </span>
                            <h2 class="section-heading__title_big text-white wow fadeInUp" data-wow-delay=".5s"
                                    data-wow-duration=".7s">
                                    Our Contributions
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="case-wrapper">
                    <div class="row case-active">
                        @foreach($contributions as $contribution)
                        <x-contribution-item :contribution="$contribution">

                        </x-contribution-item>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Case Studies Area End ======= -->

    </main>

</x-layout>