
{{--@if (count($ourServices)>0)--}}
{{--<section class="services" id="services">--}}
{{--    <div class="container">--}}
{{--        <!--  section Top -->--}}
{{--        <div class="sectionTop">--}}
{{--            <div class="sectionTitle">--}}
{{--                <h1> {{__('frontend.OurServices')}} </h1>--}}
{{--                <p> {{$settings->our_service_desc}}</p>--}}

{{--            </div>--}}
{{--            <!-- siper conrtol -->--}}
{{--            <div class="swiperBtns" data-aos="fade-down">--}}
{{--                <div class="servicesSliderNext swiper-button-next"></div>--}}
{{--                <div class="servicesSliderPrev swiper-button-prev"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- slider -->--}}
{{--        <div class="swiper servicesSlider">--}}
{{--            <div class="swiper-wrapper">--}}

{{--                @foreach($ourServices as $service)--}}
{{--                    <!-- slide -->--}}



{{--                    <div class="swiper-slide">--}}
{{--                        <div class="service" data-aos="fade-down">--}}
{{--                            <img src="{{get_file($service->image)}}" alt="">--}}
{{--                            <h4> {{$service->title}}</h4>--}}
{{--                            <p> {{ $service->desc}} </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                <!-- slide -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--@else--}}
{{--    <section class="services" id="services">--}}
{{--        <div class="container">--}}
{{--            <!--  section Top -->--}}
{{--            <div class="sectionTop">--}}
{{--                <div class="sectionTitle">--}}
{{--                    <h1> خدمات الاستقدام </h1>--}}
{{--                    <p> تعرف علي الخدمات التي نقدمها للمجتمع ...</p>--}}
{{--                    --}}{{--                <h2 class="title">{{__('frontend.OurServices')}}</h2>--}}
{{--                    --}}{{--                <h6 class="hint">{{$settings->our_service_desc}}</h6>--}}
{{--                </div>--}}
{{--                <!-- siper conrtol -->--}}
{{--                <div class="swiperBtns" data-aos="fade-down">--}}
{{--                    <div class="servicesSliderNext swiper-button-next"></div>--}}
{{--                    <div class="servicesSliderPrev swiper-button-prev"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- slider -->--}}
{{--            <div class="swiper servicesSlider">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    <!-- slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="service" data-aos="fade-down">--}}
{{--                            <img src="{{asset('frontend')}}/img/fav.svg" alt="">--}}
{{--                            <h4> إصدار التأشيرة </h4>--}}
{{--                            <p> طلب اصدار تاشيرة العمالة المنزلية الخاصة بك في برنامج مساند </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="service" data-aos="fade-down">--}}
{{--                            <img src="{{asset('frontend')}}/img/fav.svg" alt="">--}}
{{--                            <h4> اختيار العمالة</h4>--}}
{{--                            <p> اختيار السيره الذاتيه للعماله المنزليه عبر البحث في برنامج مساند </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="service" data-aos="fade-down">--}}
{{--                            <img src="{{asset('frontend')}}/img/fav.svg" alt="">--}}
{{--                            <h4> وصول العمالة </h4>--}}
{{--                            <p> وصول العمالة المنزلية من المطار المحلي الى المكتب </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="service" data-aos="fade-down">--}}
{{--                            <img src="{{asset('frontend')}}/img/fav.svg" alt="">--}}
{{--                            <h4> طلب استقدام </h4>--}}
{{--                            <p> دفع رسوم الاستقدام عبر التعاقد في برنامج مساند </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}

<!-- JOBS SERVICES SECTION START -->
<section class=" Services-Section">

    <div class="container-fluid">
        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-8 col-lg-8 col-md-12 wt-separator-two-part-right">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div> {{__('frontend.OurServices')}}</div>
                        </div>
                        <h2 class="wt-title">{{$settings->our_service_desc??"تعرف علي الخدمات التي نقدمها للمجتمع ..."}}</h2>

                    </div>
                    <!-- TITLE END-->
                </div>
            </div>
        </div>
        <div class="Services-boxes">
            <div class="job-categories-style1 m-b30">
                <div class="owl-carousel Service-carousel owl-btn-left-bottom ">
                    <!-- COLUMNS 1 -->


                    @foreach($ourServices as $key=>$service)
                        <!-- slide -->

                        <div class="item ">
                            <div class="job-categories-block">
                                <div class="twm-media">
                                    <div class="flaticon-dashboard">
                                        @if($key==0)
                                            <i class="fa-thin fa-plane"></i>
                                        @elseif($key==1)
                                            <i class="fa-thin fa-briefcase me-2"></i>
                                        @elseif($key==2)
                                            <i class="fa-thin fa-passport"></i>
                                        @elseif($key==3)
                                            <i class="fa-thin fa-id-card"></i>
                                        @else
                                            <i class="fa-thin fa-file-alt"></i>

                                        @endif
                                    </div>
                                </div>
                                <div class="twm-content">
                                    <div class="twm-jobs-available"> {{$service->title}}</div>
                                    <p> {{ $service->desc}} </p>
                                </div>
                            </div>
                        </div>


                    @endforeach

            </div>
            <div class="text-right job-categories-btn">
                <a href="{{route('frontend.show.services')}}" class=" site-button"> كل الخدمات </a>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- JOBS SERVICES SECTION END -->
