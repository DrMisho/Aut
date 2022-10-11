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

        <section class="team pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <h1 class="section-heading__title_big mb-30"><span class="text-primary">GET IN TOUCH</span></h1>
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Our Branches
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact pt-50 pb-100">
            <div class="container">
                <div class="row">
                @foreach($branches as $branch)
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="contact-item">
                            <img
                                    class="icon"
                                    src="/{{ $branch->image_path }}"
                                    alt=""
                            />
                            <h3 class="title title--heading">Office Location</h3>
                            <p class="address">{!! $branch->address !!}</p>
                            <p><span class="text-primary">Call Us: </span>{{ $branch->phone }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="contact-map">
                            <div
                                    class="map-box style-1"
                                    data-lat="40.741895"
                                    data-lng="-73.989308"
                            ></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form method="POST" action="/contact" class="contact-form--main" id="contact-form">
                            @csrf
                            <div class="contact-form p-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="name">Full Name:</label>
                                        <input
                                                id="name"
                                                name="fullname"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="Full Name *"
                                        />
                                    </div>
                                    <div class="col-md-12">
                                        <label for="email">Email:</label>
                                        <input
                                                id="email"
                                                name="email"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="Email *"
                                        />
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label for="sel">Country:</label>
                                        <select
                                                name="country"
                                                type="text"
                                                class="contact-form__input"

                                        >
                                            <option selected="selected">Select One</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label for="city">City:</label>
                                        <input
                                                id="city"
                                                name="city"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="City *"
                                        />
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label for="phone">Phone:</label>
                                        <input
                                                id="phone"
                                                name="phone"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="Phone *"
                                        />
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label for="to">To:</label>
                                        <select
                                                id="to"
                                                name="to"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="To *"
                                        >
                                            <option selected="selected">Select One</option>
                                            @foreach($job_titles as $job_title)
                                                <option value="{{ $job_title->name }}">{{ $job_title->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="subject">Subject:</label>
                                        <input
                                                id="subject"
                                                name="subject"
                                                type="text"
                                                class="contact-form__input"
                                                placeholder="Subject *"
                                        />
                                    </div>
                                    <div class="col-md-12">
                                        <label for="message">Message:</label>
                                      <textarea
                                              name="message"
                                              class="contact-form__input contact-form__input_textarea"
                                              name="message"
                                              placeholder="Message"
                                              id="message"
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
    </main>

</x-layout>