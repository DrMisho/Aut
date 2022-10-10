<div class="col-lg-4 mb-30">
    <div class="faq-accordion">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="{{ $heading }}">
                    <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#{{ $collapse }}"
                            aria-expanded="false"
                            aria-controls="{{ $collapse }}"
                    >
                        {{ $title }}
                    </button>
                </h2>
                <div
                        id="{{ $collapse }}"
                        class="accordion-collapse animated fadeInUp collapse"
                        aria-labelledby="{{ $heading }}"
                        data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        <p>
                            {{ $paragraph }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>