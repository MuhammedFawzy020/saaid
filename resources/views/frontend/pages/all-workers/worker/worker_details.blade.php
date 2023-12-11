<button class="closeBtn" data-bs-dismiss="modal">
    <i class="ri-close-line"></i>
</button>
<div class="modal-body p-0">
    <div class="cv">
        <div class="row">
            <div class="col-lg-5 p-2">

                <div class="mainImg">
                    <a data-fancybox="users{{$cv->id}}-CV" href="{{get_file($cv->cv_file)}}">
                        <img src="{{get_file($cv->cv_file)}}" alt="">
                    </a>
                </div>
                <div class="moreImgs">
                    @foreach($cv->images as $image)
                        <a data-fancybox="users{{$cv->id}}-CV" href="{{get_file($image->image)}}">
                            <img src="{{get_file($image->image)}}">
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7 p-2">
                <div class="info">
                    <ul>
                        <li>
                            <p class="title">{{__('frontend.Occupation')}} :</p>
                            <h5 class="data">{{$cv->job?$cv->job->title:""}} </h5>

                        </li>
                        <li>
                            <p class="title"> {{__('frontend.Nationality')}} : </p>
                            <h5 class="data">{{$cv->nationalitie?$cv->nationalitie->title:""}} </h5>
                        </li>
                        <li>
                            <p class="title"> {{__('frontend.Religion')}} : </p>
                            <h5 class="data">{{$cv->religion?$cv->religion->title:""}} </h5>

                        </li>
                        <li>
                            <p class="title"> {{__('frontend.Marital status')}} :  </p>
                            <h5 class="data"> {{$cv->social_type?$cv->social_type->title:""}} </h5>

                        </li>
                        <li>
                            <p class="title">{{__('frontend.Practical experience')}}  </p>
                            @if($cv->type_of_experience == 'new')
                                <h5 class="data">  {{$cv->type_of_experience?'قادم جديد':"--"}} </h5>
                            @else
                                <h5 class="data">  {{$cv->type_of_experience?'لديه خبرة سابقة':"--"}} </h5>
                            @endif
                        </li>
                        <li>
                            <p class="title">{{__('frontend.worker`s salary')}} :  </p>
                            <h5 class="data"> {{$cv->salary}} {{__('frontend.SAR')}}  </h5>
                        </li>
                        <li>
                            <p class="title">{{__('frontend.age')}} :  </p>
                            <h5 class="data"> {{$cv->age}} سنة  </h5>
                        </li>
                        @if($type=='transport')
                            <li>
                                <p class="title">سعر نقل الخدمات :  </p>
                                <h5 class="data"> {{$cv->transfer_price??""}} {{__('frontend.SAR')}}  </h5>
                                <!--<p class="alertText">-->
                                <!--   رسوم الاستقدام شامل ضريبة القيمة المضافة-->
                                <!--</p>-->
                            </li>
                            <li>
                                <p class="title">مدة العمل للكفيل السابق :  </p>
                                <h5 class="data"> {{$cv->periodservices??""}}   </h5>
                                <!--<p class="alertText">-->
                                <!--   رسوم الاستقدام شامل ضريبة القيمة المضافة-->
                                <!--</p>-->
                            </li>
                            <li>
                                <p class="title">سبب النقل :  </p>
                                <h5 class="data"> {{$cv->reasonservices??""}}   </h5>
                                <!--<p class="alertText">-->
                                <!--   رسوم الاستقدام شامل ضريبة القيمة المضافة-->
                                <!--</p>-->
                            </li>
                        @else
                            <li>
                                <p class="title">{{__('frontend.Recruitment price')}} :  </p>
                                <h5 class="data"> {{$cv->nationalitie->recruitment_price}} {{__('frontend.SAR')}}  </h5>
                                <p class="alertText">
                                    رسوم الاستقدام شامل ضريبة القيمة المضافة
                                </p>
                                <p class="alertText">
                                    لضمان حقك لايتم سداد الرسوم إلا عن طريق منصة مساند
                                </p>
                            </li>
                        @endif


                    </ul>
                    <p class="alertText">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal-footer">
    <a href="{{get_file($cv->cv_file)}}" target="_blank" class="btn ">

        {{__('frontend.Download CV')}}

    </a>
    @auth
        <a href="{{route('frontend.show.worker',$cv->id)}}" class="btn book">
            {{__('frontend.Book a Cv')}}

        </a>
    @else
        <a href="{{route('register',$cv->id)}}" class="btn book">
            {{__('frontend.Book a Cv')}}

        </a>
    @endauth

</div>



{{--<div class="modal-body">--}}

{{--    <div class="row align-items-center">--}}
{{--        <div class="col-md-6 p-2">--}}
{{--            <div class="swiper workerCvSlider ">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    <div class="swiper-slide ">--}}
{{--                        <a data-fancybox="users{{$cv->id}}-CV" href="{{get_file($cv->cv_file)}}">--}}
{{--                            <img src="{{get_file($cv->cv_file)}}" alt="">--}}
{{--                        </a>--}}
{{--                    </div>--}}


{{--                    @foreach($cv->images as $image)--}}

{{--                        <div class="swiper-slide ">--}}
{{--                            <a data-fancybox="users{{$cv->id}}-CV" href="{{get_file($image->image)}}">--}}
{{--                                <img src="{{get_file($image->image)}}">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--                <div class="workerCvSliderNext swiper-button-next"></div>--}}
{{--                <div class="workerCvSliderPrev swiper-button-prev"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 p-2">--}}
{{--            <ul class="info">--}}
{{--                <li>--}}
{{--                    <h6> {{__('frontend.Nationality')}} : </h6>--}}
{{--                    <p>{{$cv->nationalitie?$cv->nationalitie->title:""}} </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h6> {{__('frontend.Occupation')}} : </h6>--}}
{{--                    <p> {{$cv->job?$cv->job->title:""}} </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h6> {{__('frontend.Religion')}} : </h6>--}}
{{--                    <p> {{$cv->religion?$cv->religion->title:""}} </p>--}}
{{--                </li>--}}
{{--                --}}{{--                <li>--}}
{{--                --}}{{--                    <h6> {{__('frontend.Practical experience')}} : </h6>--}}
{{--                --}}{{--                    <p> {{$cv->experience?$cv->experience->title:""}} </p>--}}
{{--                --}}{{--                </li>--}}
{{--                <li>--}}
{{--                    <h6> {{__('frontend.Marital status')}} : </h6>--}}
{{--                    <p> {{$cv->social_type?$cv->social_type->title:""}} </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h6> {{__('frontend.worker`s salary')}} : </h6>--}}
{{--                    <p> {{$cv->salary}} {{__('frontend.SAR')}} </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h6>{{__('frontend.Recruitment price')}} : </h6>--}}
{{--                    <p>  {{$cv->nationalitie->recruitment_price}} {{__('frontend.SAR')}} </p>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @if (count($admins)>0)--}}
{{--        <!-- select Customer Service -->--}}
{{--        <section class="selectCustomerService">--}}
{{--            @if($type=='admission')--}}

{{--            <h6 class="hint">--}}
{{--                {{__('frontend.Please choose a customer service representative to continue completing the contract and complete the recruitment')}}--}}
{{--            </h6>--}}
{{--            <!-- choose customer service -->--}}
{{--                <div class="choose row flex-wrap">--}}
{{--                    @foreach($admins as $admin)--}}
{{--                        <!--  customer -->--}}
{{--                        <div class=" col customerOption " id="customerSupport">--}}
{{--                            <input type="radio" class="btn-check customerSupport" value="{{$admin->id}}" name="customer"--}}
{{--                                   id="option{{$admin->id}}">--}}
{{--                            <label class="btn btn-outline" for="option{{$admin->id}}">--}}
{{--                                <img src="{{asset('frontend')}}/img/customer-service.png" alt="">--}}
{{--                                <span> {{$admin->name}} </span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--            @endif--}}
{{--        </section>--}}
{{--        <!-- end select Customer Service -->--}}

{{--    @endif--}}

{{--</div>--}}

{{--<div class="modal-footer justify-content-center">--}}
{{--    <button class="btn px-4 btn-secondary" data-dismiss="modal"> إغلاق</button>--}}
{{--    @if($type=='admission')--}}
{{--    <a href="#" attr-id="{{$cv->id}}"--}}
{{--       class="btn px-4 btn-success Recruitment_Request">{{__('frontend.Recruitment Request')}}--}}
{{--        <i class="fa-solid fa-briefcase ms-2"></i>--}}
{{--    </a>--}}
{{--    @else--}}
{{--        <a href="https://wa.me/+966{{$settings->whatsapp}}?text={{get_file($cv->cv_file)}}" target="_blank" class="btn px-4 btn-success">--}}
{{--            ارسال طلب نقل--}}
{{--            <i class="fa-solid fa-briefcase ms-2"><span></span></i>--}}
{{--        </a>--}}
{{--    @endif--}}
{{--</div>--}}


<script>
    // workerCvSlider
    var workerCvSlider = new Swiper(".workerCvSlider", {
        spaceBetween: 0,
        centeredSlides: true,
        // loop: true,
        speed: 1000,
        pagination: {
            el: ".workerCvSliderpagination",
            clickable: true,
        },
        keyboard: {
            enabled: true,
        },
        navigation: {
            nextEl: ".workerCvSliderNext",
            prevEl: ".workerCvSliderPrev",
        },
    });
</script>
