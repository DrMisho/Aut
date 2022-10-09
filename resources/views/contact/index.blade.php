<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                    class="hero-inner__bg hero-inner__bg_three"
                    data-bg-image="/theme/images/bg/contact.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">Contact</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="/">Home</a>
                                        </li>
                                        <li
                                                class="breadcrumb-item active"
                                                aria-current="page"
                                        >
                                            Contact
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-heading text-center mb-50">
                    <span class="section-heading__title_small">
                      GET IN TOUCH
                    </span>
                            <h2 class="section-heading__title_big">
                                Our Branches
                            </h2>
                        </div>
                    </div>
                </div>
                @foreach($branches as $branch)
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="contact-item">
                            <img
                                    class="icon"
                                    src="{{ $branch->image_path }}"
                                    alt=""
                            />
                            <h3 class="title title--heading">Office Location</h3>
                            <p class="address">{!! $branch->translate('en')->address !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="contact-item">
                            <img
                                    class="icon"
                                    src="/theme/images/icon/phone-call.png"
                                    alt=""
                            />
                            <h3 class="title title--heading">Call Us</h3>
                            <p class="address">
                                <a class="link" href="tel:{{ trim($branch->phone, '-') }}"
                                >{{ $branch->phone }}</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="contact-map">
                            <div
                                    class="map-box style-1"
                                    data-lat="36.20755653989729"
                                    data-lng="37.15005934722469"
                            ></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="contact-form--main" id="contact-form">
                            <div class="contact-form p-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input
                                                name="name"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="Name *"
                                        />
                                    </div>
                                    <div class="col-md-12">
                                        <input
                                                name="email"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="Email *"
                                        />
                                    </div>
                                    <div class="col-md-12">
                                      <textarea
                                              name="message"
                                              class="contact-form__input contact-form__input_textarea"
                                              name="message"
                                              placeholder="Message"
                                      ></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="contact-form__button">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-response mt-10"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Contact Area End ======= -->


</x-layout>