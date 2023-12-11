<?php
$local = 'ar';
?>
<section class="about-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="about-details">
                    <div class="ab-det-head-title">
                        <h6> من نحن </h6>
                    </div>
                    <h2 class="ab-det-title">شركة ساعد للاستقدام</h2>
                    <p class="ad-det-desc">
                        {{ $setting->about_us }}
                    </p>
                    <ul class="description-list list-unstyled">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{ $settings->getTranslation('service', $local) }}
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{ $settings->getTranslation('license', $local) }}
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{ $settings->getTranslation('security', $local) }}
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            {{ $settings->getTranslation('delivery', $local) }}
                        </li>
                    </ul>
                </div>


            </div>
            <div class="col-lg-7 col-md-12">


                <div class="aboutImg">
                    <div class="image wow fadeInUp">
                        <img src="{{ asset('frontend') }}/images/s2.webp">
                    </div>


                </div>

            </div>
        </div>


        <div class="twm-how-it-work-section">

        </div>
    </div>

</section>
