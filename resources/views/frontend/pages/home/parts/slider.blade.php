

<!-- main slider -->
{{--<section class="section-box mb-70 mt-100">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="banner-hero hero-1 banner-homepage">--}}
{{--            <div class="banner-inner">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-7 col-lg-12">--}}
{{--                        <div class="block-banner">--}}
{{--                            <h6 class="heading-title"> {{$setting->title}}</h6>--}}
{{--                            <h1 class="heading-banner wow animate__animated animate__fadeInUp">   {{$setting->header_title}}</h1>--}}
{{--                            <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">--}}
{{--                                {{$setting->header_desc}}--}}
{{--                            </div>--}}
{{--                            <div class="mt-30">--}}
{{--                                <a href="{{route('all-workers')}}" class="btn btn-default mr-15">طلب استقدام </a>--}}
{{--                                <a href="{{route('track_order_view')}}" class="btn btn-border-brand-2"> تتبع طلبك </a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">--}}
{{--                        <div class="banner-imgs">--}}
{{--                            @if (count($sliders)>0)--}}
{{--                                @foreach($sliders as $slider)--}}
{{--                            <div class="banner-1 shape-1"><img class="img-responsive" alt="jobBox" src="{{get_file($slider->image)}}"></div>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">--}}
{{--                        <div class="banner-imgs">--}}
{{--                            <div class="banner-1 shape-1"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner1.png"></div>--}}
{{--                            <div class="banner-2 shape-2"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner2.png"></div>--}}
{{--                            <div class="banner-3 shape-3"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner3.png"></div>--}}
{{--                            <div class="banner-4 shape-3"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner4.png"></div>--}}
{{--                            <div class="banner-5 shape-2"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner5.png"></div>--}}
{{--                            <div class="banner-6 shape-1"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner6.png"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<div class="overlay-content"></div>--}}
{{--<section class="section-box mb-70 mt-100">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="banner-hero hero-1 banner-homepage">--}}
{{--            <div class="banner-inner">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-7 col-lg-12">--}}
{{--                        <div class="block-banner">--}}
{{--                            <h6 class="heading-title">{{$setting->title}}</h6>--}}
{{--                            <h1 class="heading-banner wow animate__animated animate__fadeInUp"> أحد أعرق مكاتب الإستقدام في المملكة</h1>--}}
{{--                            <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">--}}
{{--                                {{$setting->header_desc}}--}}
{{--                            </div>--}}
{{--                            <ul class="features-list list-unstyled d-flex flex-wrap">--}}
{{--                                <!-- feature item #1 -->--}}
{{--                                <li class="feature-item">--}}
{{--                                    <div class="feature__icon">--}}
{{--                                        <i class="fa-regular fa-id-card"></i>--}}
{{--                                    </div>--}}
{{--                                    <a href="{{route('all-workers')}}">  <h2 class="feature__title"> اختيار العمالة </h2></a>--}}
{{--                                </li><!-- /.feature-item -->--}}
{{--                                <!-- feature item #2 -->--}}
{{--                                <li class="feature-item">--}}
{{--                                    <div class="feature__icon">--}}
{{--                                        <i class="fa-thin fa-plane"></i>--}}
{{--                                    </div>--}}
{{--                                     <a href="{{route('all-workers-transport','transport')}}">  <h2 class="feature__title"> نقل الخدمات </h2></a>--}}
{{--                                </li><!-- /.feature-item -->--}}
{{--                                <!-- feature item #3 -->--}}
{{--                                <li class="feature-item">--}}
{{--                                    <div class="feature__icon">--}}
{{--                                        <i class="fa-light fa-globe"></i>--}}
{{--                                    </div>--}}
{{--                                    <a href="{{route('frontend.dailyLaborDemand')}}"><h2 class="feature__title"> قطاع الأعمال </h2></a>--}}
{{--                                </li><!-- /.feature-item -->--}}
{{--                            </ul>--}}
{{--                            <!-- <div class="mt-30">--}}
{{--                              <a href="all-workers.html" class="btn btn-default mr-15">طلب استقدام </a>--}}
{{--                              <a href="trackOrder.html" class="btn btn-border-brand-2"> تتبع طلبك </a>--}}
{{--                            </div> -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">--}}
{{--                        <div class="banner-imgs">--}}
{{--                            @if (count($sliders)>0)--}}
{{--                                @foreach($sliders as $slider)--}}
{{--                                    <div class="banner-1 shape-1"><img class="img-responsive" alt="jobBox" src="{{get_file($slider->image)}}"></div>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <div class="banner-1 shape-1"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner1.png"></div>--}}
{{--                                <div class="banner-2 shape-2"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner2.png"></div>--}}
{{--                                <div class="banner-3 shape-3"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner3.png"></div>--}}
{{--                                <div class="banner-4 shape-3"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner4.png"></div>--}}
{{--                                <div class="banner-5 shape-2"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner5.png"></div>--}}
{{--                                <div class="banner-6 shape-1"><img class="img-responsive" alt="jobBox" src="{{asset('frontend')}}/img/banner/banner6.png"></div>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- main slider -->
<section class="mainSlider">
    <div class="swiper mainSliderContainer ">
        <div class="swiper-wrapper">
            <!-- swiper-slide -->
            <div class="swiper-slide" style="background-image:url({{asset('frontend')}}/images/s1.webp)">
                <div class=" info">
                    <h4 class="hint">{{$setting->title}}</h4>
                    <h1 class="sliderTitle"> {{$setting->header_desc}} </h1>
                    <div class="btns">
                        <a href="{{route('all-workers')}}" class="btn"> طلب استقدام </a>
                        <a href="{{route('all-workers-transport','transport')}}" class="btn">طلب تاجير </a>
                    </div>
                </div>
            </div>
            <!-- swiper-slide -->
            <div class="swiper-slide" style="background-image:url({{asset('frontend')}}/images/s2.webp)">
                <div class=" info">
                    <h4 class="hint"> توفر موطن </h4>
                    <h1 class="sliderTitle"> ايدي عاملة مميزة ومدربة بحرفية </h1>
                    <div class="btns">
                        <a href="{{route('all-workers')}}" class="btn"> طلب استقدام </a>
                        <a href="{{route('all-workers-transport','transport')}}" class="btn">طلب تاجير </a>
                    </div>
                </div>
            </div>
            <!-- swiper-slide -->
            <div class="swiper-slide" style="background-image:url({{asset('frontend')}}/images/s3.webp)">
                <div class=" info">
                    <h4 class="hint"> نقدم أفضل خدمات </h4>
                    <h1 class="sliderTitle"> استقدام سريع بأسعار تنافسية </h1>
                    <div class="btns">
                        <a href="{{route('all-workers')}}" class="btn"> طلب استقدام </a>
                        <a href="{{route('all-workers-transport','transport')}}" class="btn">طلب تاجير </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiperBtns" data-aos="fade-down">
        <div class="mainSliderNext swiper-button-next"></div>
        <div class="mainSliderPrev swiper-button-prev"></div>
    </div>
</section>
