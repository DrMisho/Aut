@props(['icon', 'startDelay', 'endDelay', 'details', 'paragraph'])

<div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="{{  $startDelay }}" data-wow-duration="{{  $endDelay }}">
    <div class="services__item mb-50">
        <div class="services__item_overlay"></div>
        <header class="services__item_header d-flex align-items-center">
            <i class="{{  $icon  }}"></i>
            <h3 class="services__item_title">
                <a href="services-details.html">{{  $details  }}</a>
            </h3>
        </header>
        <div class="services__item_content">
            <p class="services__item_paragraph">
                {{  $paragraph  }}
            </p>
        </div>
    </div>
</div>