<div class="col-lg-4 col-md-6 blog-item__column mb-30">
    <div class="blog-item blog-item--software">
        <header class="blog-item__header header">
            <img width="551" height="395" class="blog-item__img"
                 src="{{  $competition->image_path  }}" alt="{{  $competition->translate('en')->title  }}" />
            <ul class="meta">
                <li class="blog-item__list list">
                    <i class="far fa-user icon"></i>
                    <span class="name name--poster">By {{  $competition->team->translate('en')->name  }}</span>
                </li>
                <li class="blog-item__list list">
                    <i class="far fa-calendar icon"></i>
                    <span class="name name--dates">{{  $competition->year  }}</span>
                </li>
            </ul>
        </header>
        <div class="blog-item__div content">
            <h3 class="blog-item__title">
                {!!  $competition->translate('en')->title  !!}
            </h3>
            <p class="blog-item__text">
                {!!  $competition->translate('en')->position  !!}
            </p>
        </div>
    </div>
</div>