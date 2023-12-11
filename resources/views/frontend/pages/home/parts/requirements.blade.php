{{--<section class="requirements">--}}
{{--    <div class="container">--}}
{{--        <div class="sectionTitle">--}}
{{--            <h1> متطلبات الإستقدام </h1>--}}
{{--            <p> هذه هي المتطلبات التي تحتاجها للإستقدام ... </p>--}}
{{--        </div>--}}

{{--        <div class="row g-3">--}}
{{--            <div class="col-lg-6 p-0 px-lg-2">--}}
{{--                <div class="requirement" data-aos="fade-down">--}}
{{--                    <h4>{{$requirements[0]->title}}</h4>--}}
{{--                    <?php--}}
{{--                        $local='ar'--}}
{{--                        ?>--}}
{{--                    <ul>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-passport-line"></i>--}}
{{--                            </div>--}}
{{--                            <p> {{$requirements[0]->getTranslation('step_1', $local)}} </p>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-article-line"></i>--}}
{{--                            </div>--}}
{{--                            <p> {{$requirements[0]->getTranslation('step_2', $local)}}  </p>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-profile-line"></i>--}}
{{--                            </div>--}}
{{--                            <p>  {{$requirements[0]->getTranslation('step_3', $local)}}  </p>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-customer-service-2-line"></i>--}}
{{--                            </div>--}}
{{--                            <p> {{$requirements[0]->getTranslation('step_4', $local)}}  </p>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 p-0 px-lg-2">--}}
{{--                <div class="requirement" data-aos="fade-down">--}}
{{--                    <h4>الوثائق إصدار التأشيرة </h4>--}}
{{--                    <h6>يرجى زيارة موقع مساند برنامج العمالة المنزلية من <a href="#!" target="_blank"> هنا </a></h6>--}}
{{--                    <ul>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-passport-line"></i>--}}
{{--                            </div>--}}
{{--                            <p> {{$requirements[1]->getTranslation('step_1', $local)}} </p>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-article-line"></i>--}}
{{--                            </div>--}}
{{--                            <p> {{$requirements[1]->getTranslation('step_2', $local)}} </p>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-profile-line"></i>--}}
{{--                            </div>--}}
{{--                            <p>{{$requirements[1]->getTranslation('step_3', $local)}} </p>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-down">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ri-customer-service-2-line"></i>--}}
{{--                            </div>--}}
{{--                            <p>{{$requirements[1]->getTranslation('step_4', $local)}} </p>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    </div>--}}
{{--</section>--}}
<!-- =============================== requirements ========================================== -->
<?php
$local='ar'
?>
<section class="requirements-section">
    <div class="container-fluid">
        <div class="requirements-title">
            <div class="requirements-title-heading">
                <h6> متطلبات الاستقدام </h6>
            </div>
            <h2> هذه هي المتطلبات التي تحتاجها للاستقدام ... </h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="section-title me-5">
                    <h3 class="title">{{$requirements[0]->title}}</h3>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-regular fa-passport"></i>
                        </div>
                        <div class="requir-content">
                            <p>  {{$requirements[0]->getTranslation('step_1', $local)}} </p>
                        </div>
                    </div>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-regular fa-newspaper"></i>
                        </div>
                        <div class="requir-content">
                            <p>   {{$requirements[0]->getTranslation('step_2', $local)}} </p>
                        </div>
                    </div>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-regular fa-address-card"></i>
                        </div>
                        <div class="requir-content">
                            <p>  {{$requirements[0]->getTranslation('step_3', $local)}} </p>
                        </div>
                    </div>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="requir-content">
                            <p>   {{$requirements[0]->getTranslation('step_4', $local)}}</p>
                        </div>
                    </div>




                </div>
            </div><!--end col-->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="section-title me-5">
                    <h3 class="title">{{$requirements[1]->title??"الوثائق لإصدار التأشيرة"}} </h3>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-regular fa-passport"></i>
                        </div>
                        <div class="requir-content">
                            <p>{{$requirements[1]->getTranslation('step_1', $local)}}  </p>
                        </div>
                    </div>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-regular fa-newspaper"></i>
                        </div>
                        <div class="requir-content">
                            <p> {{$requirements[1]->getTranslation('step_2', $local)}}  </p>
                        </div>
                    </div>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-regular fa-address-card"></i>
                        </div>
                        <div class="requir-content">
                            <p> {{$requirements[1]->getTranslation('step_3', $local)}}  </p>
                        </div>
                    </div>
                    <div class="requirements-box">
                        <div class="requir-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="requir-content">
                            <p>   {{$requirements[1]->getTranslation('step_4', $local)}}  </p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div> <!--end row-->
    </div><!--end container-->
</section>
