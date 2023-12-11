
{{--<section class="contactUs" id="contactUs">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <!-- data -->--}}
{{--            <div class="col-sm-6 col-md-5 p-2">--}}
{{--                <div class="contactInfo">--}}
{{--                    <!-- Section Title -->--}}
{{--                    <div class="sectionTitle">--}}
{{--                        <h1> {{__('frontend.contactUs')}} </h1>--}}
{{--                        <p> كن علي اتصال دائم بنا ... </p>--}}
{{--                    </div>--}}
{{--                    <!-- info -->--}}
{{--                    <div class="info" data-aos="fade-down">--}}
{{--                        <i class="ri-map-pin-2-fill me-3"></i>--}}
{{--                        <div class="data">--}}
{{--                            <h6> {{__('frontend.ourLocation')}} </h6>--}}
{{--                            <a target="_blank" href="https://goo.gl/maps/mrHfiy5j4erppwr26">   <p>   {{$settings->address1??"السعودية - الرياض - حي المؤنسية بجوار بحر الاسعار"}}</p></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- info -->--}}
{{--                    <div class="info" data-aos="fade-down">--}}
{{--                        <i class="ri-mail-unread-fill me-3"></i>--}}
{{--                        <div class="data">--}}
{{--                            <h6> {{__('frontend.Email')}} </h6>--}}
{{--                            <p><a href="mailto:{{$settings->email1??"mail@mail.com"}}"> {{$settings->email1??"mail@mail.com"}}</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- info -->--}}
{{--                    <div class="info" data-aos="fade-down">--}}
{{--                        <i class="ri-customer-service-2-fill me-3"></i>--}}
{{--                        <div class="data">--}}
{{--                            <h6> {{__('frontend.PhoneNumbers')}} </h6>--}}
{{--                            <p><a href="tel:">{{$settings->phone1??"+996 0123456789"}}</a></p>--}}
{{--                            <p><a href="tel:">{{$settings->phone2??"+996 0123456789"}}</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- form -->--}}
{{--            <div class="col-sm-6 col-md-7 p-2">--}}
{{--                    <form id="Form" action="{{route('front.contact_us_action')}}" method="post" class="row needs-validation " novalidate data-aos="fade-down">--}}
{{--                    <div class="col-md-12 p-2">--}}
{{--                        <label class="form-label"> <i class="fas fa-user me-2"></i> {{__('frontend.FullName')}}* </label>--}}
{{--                        <input  id="contact_name" name="name" type="text" class="form-control">--}}
{{--                        <div class="invalid-feedback"> هذا الحقل ضروري </div>--}}
{{--                        <div class="valid-feedback"> جيد </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 p-2">--}}
{{--                        <label class="form-label"><i class="fas fa-phone-alt me-2"></i> {{__('frontend.Phone Number')}} * </label>--}}
{{--                        <input onkeypress="return isNumber(event)" data-validation="required" name="phone" type="text" class="form-control">--}}
{{--                        <div class="invalid-feedback"> هذا الحقل ضروري </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 p-2">--}}
{{--                        <label class="form-label"> <i class="fa-solid fa-comment-lines me-2"></i> {{__('frontend.Subject')}} </label>--}}
{{--                        <input type="text" data-validation="required" name="subject" class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 p-2">--}}
{{--                        <label class="form-label"> <i class="fas fa-feather-alt me-2"></i> {{__('frontend.Your Message')}} * </label>--}}
{{--                        <textarea class="form-control" rows="5"  name="message"></textarea>--}}
{{--                        <div class="invalid-feedback"> هذا الحقل ضروري </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 text-center pt-2">--}}
{{--                        <button id="submit_button" type="submit" class="btn btn-outline-success"> ارسال </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--</section>--}}

<!--================================ Contact-us ==========================================  -->
<div class="Contact-section">
    <div class="overlay-main "></div>
    <div class="container-fluid">
        <div class="SectionTitle">
            <div class="title">
                <div>تواصل معنا</div>
            </div>
            <h2 class="hint">فريق خدمة العملاء على مدار الساعة لخدمتك</h2>
        </div>
        <div class="section-content">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="Contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14496.81725574228!2d46.58818966977539!3d24.719864999999988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2eff37b677c03d%3A0xfae74dffc896a0f1!2z2LTYsdmD2Kkg2YXZiNi32YYg2YTZhNin2LPYqtmC2K_Yp9mF!5e0!3m2!1sen!2ssa!4v1683505291358!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="Contact-block">
                        <div class="Contact-box">
                            <div class="Contact-info">
                                <div class="Contact-meta ">
                                    <ul><li class="post-date"> العنوان </li></ul>
                                </div>
                                <div class="meta-title ">
                                    <h4 class="post-title">

                                        {{$settings->address1??"المملكة العربية السعودية - الرياض - شارع الوحدة"}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="Contact-box">
                            <div class="Contact-info">
                                <div class="Contact-meta ">
                                    <ul><li class="post-date"> البريد الالكتروني </li></ul>
                                </div>
                                <div class="meta-title ">
                                    <h4 class="post-title">
                                        {{$settings->email1??"mail@mail.com"}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="Contact-box">
                            <div class="Contact-info">
                                <div class="Contact-meta ">
                                    <ul><li class="post-date"> رقم الجوال الرئيسى </li></ul>
                                </div>
                                <div class="meta-title ">
                                    <a href="tel:{{$settings->phone}}">
                                    <h4 class="post-title">

                                        {{$settings->phone1??"+996 0123456789"}}

                                    </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="Contact-box">
                            <div class="Contact-info">
                                <div class="Contact-meta ">
                                    <ul><li class="post-date"> قسم المبيعات </li></ul>
                                </div>
                                <div class="meta-title ">
                                    <a href="tel:{{$settings->phone4}}">
                                        <h4 class="post-title">

                                            {{$settings->phone4??"+996 0123456789"}}

                                        </h4>
                                    </a>
                                    <a href="tel:{{$settings->phone5}}">
                                        <h4 class="post-title">

                                            {{$settings->phone5??"+996 0123456789"}}

                                        </h4>
                                    </a>
                                    <a href="tel:{{$settings->phone6}}">
                                        <h4 class="post-title">

                                            {{$settings->phone6??"+996 0123456789"}}

                                        </h4>
                                    </a>
                                    <a href="tel:{{$settings->phone7}}">
                                        <h4 class="post-title">

                                            {{$settings->phone7??"+996 0123456789"}}

                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
