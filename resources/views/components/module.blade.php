<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="section-heading text-center mb-20">
            <span class="section-heading__title_small">
              {{  $suite->solution->translate('en')->name  }}
            </span>
        </div>
    </div>
</div>
<div class="row">
    @foreach($suite->modules as $module)
        <div class="col-lg-4 mb-30">
            <div class="faq-accordion">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$module->module->module_code}}">
                            <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{$module->module->module_code}}"
                                    aria-expanded="false"
                                    aria-controls="collapse{{$module->module->module_code}}"
                            >
                                {{  $module->module->translate('en')->name  }}
                            </button>
                        </h2>
                        <div
                                id="collapse{{$module->module->module_code}}"
                                class="accordion-collapse animated fadeInUp collapse"
                                aria-labelledby="heading{{$module->module->module_code}}"
                                data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <p>
                                    {!!  $module->module->translate('en')->description  !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>