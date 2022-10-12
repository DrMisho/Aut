<section class="section-bg-common pt-30 pb-30">
    <div class="container">
        <div class="row">
            @foreach($boxes as $box)
            <div class="col-lg-4 col-md-6">
                <div class="about-content__image about-content__image_right position-relative">
                    <img width="690" height="617" src="/{{ $box->image_path }}"
                         alt="About Our RadiusTheme Company" class="about-img wow fadeInRight" data-wow-delay="1s"
                         data-wow-duration="1.2s" />
                    <div class="about-content__experience">
                        <div class="about-content__experience_title">
                            {{ $box->title }}
                        </div>
                    </div>
                </div>
                <div class="about-software__content about-agency__content p-0 mb-20">
                            <span class="title title--small aos-item aos-init aos-animate mt-20" data-aos="fade-up"
                                  data-aos-duration="800" data-aos-delay="500">
                                {!! $box->content !!}
                            </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>