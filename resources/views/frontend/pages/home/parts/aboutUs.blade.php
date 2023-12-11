

{{--<section class="aboutUs">--}}
{{--    <div class="container">--}}
{{--        <div class="row g-3 align-items-end">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="sectionTitle">--}}
{{--                    <h1> من نحن </h1>--}}


{{--                    <p >--}}

{{--                        {{$setting->about_us}}--}}

{{--                    </p>--}}
{{--                </div>--}}
{{--                <?php--}}
{{--                $local='ar'--}}
{{--                ?>--}}
{{--                <div class="features">--}}
{{--                    <div class="feature" data-aos="fade-down">--}}
{{--                <span class="icon">--}}
{{--                  <img src="{{asset('frontend')}}/img/customerService.svg" alt="">--}}
{{--                </span>--}}
{{--                        <p> {{$settings->getTranslation('service', $local)}}</p>--}}
{{--                    </div>--}}
{{--                    <div class="feature" data-aos="fade-down">--}}
{{--                <span class="icon">--}}
{{--                  <img src="{{asset('frontend')}}/img/license.svg" alt="">--}}
{{--                </span>--}}
{{--                        <p> {{$settings->getTranslation('license', $local)}} </p>--}}
{{--                    </div>--}}
{{--                    <div class="feature" data-aos="fade-down">--}}
{{--                <span class="icon">--}}
{{--                  <img src="{{asset('frontend')}}/img/guarantee.svg" alt="">--}}
{{--                </span>--}}
{{--                        <p>{{$settings->getTranslation('security', $local)}} </p>--}}
{{--                    </div>--}}
{{--                    <div class="feature" data-aos="fade-down">--}}
{{--                <span class="icon">--}}
{{--                  <img src="{{asset('frontend')}}/img/employment.svg" alt="">--}}
{{--                </span>--}}
{{--                        <p>{{$settings->getTranslation('delivery', $local)}} </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="aboutImage">--}}
{{--                    <img src="{{asset('frontend')}}/img/about.jpg">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<?php
$local='ar'
?>
<section class="about-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="about-details">
                    <div class="ab-det-head-title">
                        <h6> من نحن </h6>
                    </div>
                    <h2 class="ab-det-title">شركة موطن للاستقدام</h2>
                    <p class="ad-det-desc">
                        {{$setting->about_us}}
                        </p>
                    <ul class="description-list list-unstyled">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{$settings->getTranslation('service', $local)}}
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{$settings->getTranslation('license', $local)}}
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{$settings->getTranslation('security', $local)}}
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{$settings->getTranslation('delivery', $local)}}
                        </li>
                    </ul>
                </div>


            </div>
            <div class="col-lg-7 col-md-12">


                <div class="aboutImg">
                    <div class="image wow fadeInUp">
                        <img src="{{asset('frontend')}}/images/s2.webp">
                    </div>


                </div>

            </div>
        </div>


        <div class="twm-how-it-work-section">

        </div>
    </div>

</section>
