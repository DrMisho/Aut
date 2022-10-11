<section class="timeline pt-125 pb-130 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading text-center mb-50">
                    <span class="section-heading__title_small">
                      Our History
                    </span>
                    <h2 class="section-heading__title_big">
                        We create dreams for the future. <br />
                        We realize them successfully.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div
                        class="timeline-wrapper timeline-wrapper--line position-relative"
                >
                    @foreach($boxes as $box)
                        <div class="row align-items-end timeline-wrapper__row">
                            <div class="col-lg-6 mb-80">
                                <div
                                        class="timeline-item timeline-item--left text-end aos-init aos-animate"
                                        data-aos="fade-right"
                                        data-aos-easing="ease-in-sine"
                                        data-aos-duration="9000"
                                >
                                    <div class="timeline-header">
                                        <h2 class="heading primary-text-color">{{ $box->title }}</h2>
                                    </div>
                                    <div class="timeline-image">
                                        <img
                                                src="/theme/images/timeline/{{$loop->iteration}}.jpg"
                                                alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-80">
                                <div
                                        class="timeline-item timeline-item--right aos-init aos-animate"
                                        data-aos="fade-left"
                                        data-aos-easing="ease-in-sine"
                                        data-aos-duration="9000"
                                >
                                    <div class="timeline-circle"></div>
                                    <div class="timeline-content">
                                        <p>
                                            {!! $box->content !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>