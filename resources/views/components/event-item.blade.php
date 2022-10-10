<div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay=".4s">
    <div class="case-choose">
        <div class="case-choose__thumb image">
            <a href="/events/{{ $event->id }}">
                <img
                        src="/theme/images/case/feature-chose-thub-1.jpg"
                        alt="Case Details"
                        width="545"
                        height="398"
                />
            </a>
        </div>
        <div class="case-choose__content">
            <h3 class="heading">
                <a href="/events/{{ $event->id }}"
                >{!! $event->translate('en')->title !!}</a>
            </h3>
            <p class="paragraph">
                {!! $event->translate('en')->description !!}
            </p>
            <span>{!! $event->city->translate('en')->name !!} | {!! $event->translate('en')->location !!}</span>
            <br>
            <a class="link" href="/events/{{ $event->id }}"
            >View Event</a>
        </div>
    </div>
</div>