
{{--<section class="testimonials">--}}
{{--    <div class="container">--}}

{{--        <div class="sectionTitle align-items-center">--}}
{{--            <h1> اراء المستخدمين </h1>--}}
{{--            <p> نعرض لك بعض اراء العملاء الذين تمت خدمتهم ... </p>--}}
{{--        </div>--}}
{{--        <div class="swiper testimonialsSlider">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                @foreach($reviews as $key=>$val)--}}
{{--                    <div class="swiper-slide p-2">--}}
{{--                        <div class="singleItem">--}}
{{--                            <div class="itemComment">--}}
{{--                                <p>{{$val->comment}} </p>--}}
{{--                            </div>--}}
{{--                            <div class="clientInfo">--}}
{{--                                <img src="{{get_file($val->img)}}">--}}
{{--                                <h5>{{$val->name}} </h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--================================ Testemonials ==========================================  -->
<section class="testimonial-section">
    <div class="container-fluid">
        <div class="testimonial-title">
            <div class="testimonial-title-heading">
                <h6>اراء المستخدمين</h6>
            </div>
            <h2>نعرض لك بعض اراء العملاء الذين تمت خدمتهم ...</h2>
        </div>
        <div class="section-content">
            <div class="owl-carousel testimonial-carousel owl-btn-bottom-center ">
                <!-- COLUMNS 1 -->


                @foreach($reviews as $key=>$val)
                    <div class="item ">
                        <div class="testimonial-block">
                            <div class="testimonial-content">
                                <div class="testi-media">
                                    <img src="{{get_file($val->img)}}" alt="#">
                                </div>
                                <div class="testi-content">
                                    <div class="testi-quote">
                                        <img src="{{asset('frontend')}}/img/quote-dark.png" alt="">
                                    </div>
                                    <div class="testi-info">  {{$val->comment}}</div>
                                    <div class="testi-detail">
                                        <div class="testi-name">{{$val->name}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
