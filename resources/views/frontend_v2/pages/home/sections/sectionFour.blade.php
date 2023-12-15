<!-- =============================== Countries ========================================== -->




@if (count($countries) > 0)
    <section class="Countries-section" id="Countries">
        <div class="container-fluid">
            <div class="text-center">
                <h1 class="display-1">
                    دول الاستقدام
                </h1>
                <p class="text-muted">
                    تعرف علي الدول و اسعار الاستقدام الان
                </p>
                <br />
            </div>
            <div class="Countries-boxes">
                <div class="row">
                    <div class="swiper newCards">
                        <div class="swiper-wrapper">
                            @foreach ($countries as $key => $country)
                                <div class="swiper-slide m-2">
                                    <div class="Countries-block">
                                        <div class="Countries-media">
                                            <div> <img src="{{ get_file($country->image) }}" alt="" /></div>
                                        </div>
                                        <div class="Countries-content">
                                            <div class="count-content-title">{{ $country->title }}</div>
                                            <p>{{ $country->price?->price }} ريال سعودي </p>
                                            <a href="{{ route('all-workers', ['nationality' => $country->id]) }}"
                                                class="defaultBtn">
                                                اطلب الآن </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ url('/countries') }}" class="btn btn-secondary">
                            جميع دول الاستقدام
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>
@else
    <section class="Countries-section" id="Countries">
        <div class="container-fluid">
            <div class="Countries-title">
                <div class="Countries-title-heading">
                    <h6> دول الاستقدام </h6>
                </div>
                <h2> اختيار الدولة التي تتم عملية الاستقدام منها</h2>
            </div>
            <div class="Countries-boxes">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div> <img src="{{ asset('frontend') }}/img/countries/1.png" alt="" /></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title">أوغندا</div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{ asset('frontend') }}/img/countries/2.png" alt="" /></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> كينيا </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{ asset('frontend') }}/img/countries/3.jpeg" alt="" /></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> بنجلادش </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{ asset('frontend') }}/img/countries/4.jpeg" alt="" /></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> الفلبين </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{ asset('frontend') }}/img/countries/5.png" alt="" /></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> الهند </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{ asset('frontend') }}/img/countries/6.png" alt="" /></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> موريتانيا </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{ asset('frontend') }}/img/countries/7.png" alt="" /></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> جيبوتي </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endif
