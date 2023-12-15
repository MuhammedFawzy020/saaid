<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('frontend_v2.layout.header')
</head>
<?php
$setting = App\Models\Setting::first();

?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXKR56N9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>

    @include('frontend_v2.layout.inc.navbar')


    @yield('content')


    <!-- Remove the container if you want to extend the Footer to full width. -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="row">

        <footer class="text-white text-center text-lg-start" style="background-color:#53738A;color:white">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 text-bold" style="color:white;">شركة الساعد للاستقدام</h5>

                        <p style="color:white;">
                            سرعة وصول العامله أو المستقدم ليس أنجاز للمكاتب , بل الأختيار الموفق والضمان الأطول والدعم
                            اللوجستي
                        </p>


                        <div class="mt-4">
                            <!-- Facebook -->
                            <a href="{{ $setting->facebook }}" class="btn btn-floating btn-light btn-lg"><i
                                    class="bx bxl-facebook-circle"></i></a>
                            <!-- Dribbble -->
                            <a href="{{ $setting->instagram }}" class="btn btn-floating btn-light btn-lg"><i
                                    class="bx bxl-instagram"></i></a>
                            <!-- Twitter -->
                            <a href="{{ $setting->twitter }}" class="btn btn-floating btn-light btn-lg"><i
                                    class="bx bxl-twitter"></i></a>
                            <!-- Google + -->
                            <a href="{{ $setting->snapchat }}" class="btn btn-floating btn-light btn-lg"><i
                                    class="bx bxl-snapchat"></i></a>
                            <!-- Linkedin -->
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-bold mb-4 pb-1" style="color:white;">تواصل معنا</h5>

                        <ul class="fa-ul" style="margin-left: 1.65em;">
                            <li class="mb-3" style="color:white;">
                                <span style="color:white;"><i class="bx bx-home"
                                        style="color:white !important"></i></span><span class="ms-2"
                                    style="color:white !important">{{ $setting->address1 }}</span>
                            </li>
                            <li class="mb-3" style="color:white;">
                                <span style="color:white;"><i class="bx bx-envelope"
                                        style="color:white !important"></i></span><span class="ms-2"
                                    style="color:white !important">{{ $setting->email1 }}</span>
                            </li>
                            <li class="mb-3" style="color:white;">
                                <span style="color:white;"><i class="bx bx-phone"
                                        style="color:white !important"></i></span><span class="ms-2"
                                    style="color:white !important">{{ $setting->phone1 }} -
                                    {{ $setting->phone2 }}</span>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 text-bold" style="color:white;">مواقيت العمل</h5>

                        <table class="table text-center text-white">
                            <tbody class="fw-normal">
                                <tr>
                                    <td style="color:white;">الاربعاء - السبت:</td>
                                    <td style="color:white;">8am - 9pm</td>
                                </tr>
                                <tr>
                                    <td style="color:white;">الخميس - الجمعة:</td>
                                    <td style="color:white;">8am - 1am</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="color:white;">
                © حفوف النشر 2024:
                <a class="text-white" href="#" style="color:white;">شركة الساعد للاستقدام</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
    <!-- End of .container -->
    <!-- Grid container -->


    <div class="sbuttons">
        <a href="#" target="_blank" class="sbutton whatsapp" tooltip="واتساب"><i
                class="bx bxl-whatsapp text-white"></i></a>

        <a href="#" target="_blank" class="sbutton fb" tooltip="اتصال"><i class="bx bx-phone text-white"></i></a>



        <a target="_blank" class="sbutton mainsbutton" tooltip="تواصل معنا"><i
                class='bx bx-headphone text-white'></i></a>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script>
        $(window).on('load', function() {
            // Preloader
            $("#preloader").fadeOut(900);
            $(".preloader-bg").delay(800).fadeOut(900);
            new WOW().init();

        });
    </script>



    <script src="{{ asset('frontend') }}/js/jquery.appear.js"></script>
    <script src="{{ asset('frontend') }}/js/odometer.min.js"></script>

    <script>
        var mainSlider = new Swiper(".mainSliderContainer", {
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            // effect: "fade",
        });

        //Categories Slider
        var referencesSlider = new Swiper(".referencesSlider", {
            slidesPerView: 3,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

        });

        //Categories Slider
        var referencesSlider = new Swiper(".cards", {
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".odometer").appear(function(e) {
                var odo = $(".odometer");

                odo.each(function() {
                    var countNumber = $(this).attr("data-count");
                    console.log(countNumber);
                    $(this).html(countNumber);
                });
            });
        });
    </script>

    @yield('js')
</body>

</html>
