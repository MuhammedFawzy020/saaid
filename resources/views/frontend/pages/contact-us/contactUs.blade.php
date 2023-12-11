@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Application for the recruitment of domestic workers')}}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')
    <div class=" overlay-wraper page-banner">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="banner-content">
                <div class="banner-title">
                    <div class="banner-title-name">
                        <h2>تواصل معنا</h2>
                    </div>
                </div>
                <div>
                    <ul class="page-breadcrump list-unstyled">
                        <li><a href="{{route('home')}}">الرئيسية</a></li>
                        <li>تواصل معنا</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- ===========================================contact-us ======================================== -->
    <!-- CONTACT FORM -->
    <div class="page-contact-section">
        <div class="section-content">
            <div class="container-fluid">
                <!-- CONTACT FORM-->
                <div class="contact-inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-info">
                                <div class="contact-details">
                                    <div class="contact-info-section">
                                        <div class="c-info-column">
                                            <div class="c-info-icon"><i class=" fas fa-map-marker-alt"></i></div>
                                            <h3 class="twm-title">العنوان </h3>
                                            <p></p>
                                        <br>

                                      <p>   {{$settings->address1??"المملكة العربية السعودية - الرياض - شارع الوحدة"}}</p>

                                        </div>

                                        <div class="c-info-column">
                                            <div class="c-info-icon custome-size"><i class="fas fa-mobile-alt"></i></div>

                                            <h3  class="twm-title">رقم الجوال الرئيسي </h3>
                                             <br>
                                            <p><a href="{{'tel:'.$settings->phone1}}">{{$settings->phone1??"+"}}</a></p>

                                        </div>
                                        <div class="c-info-column">
                                            <div class="c-info-icon custome-size"><i class="fas fa-user"></i></div>

                                            <h3  class="twm-title"> قسم المبيعات </h3>
                                            <br>
                                            <p><a href="{{'tel:'.$settings->phone4}}">{{$settings->phone4??"+"}}</a></p>
                                            <p><a href="{{'tel:'.$settings->phone5}}">{{$settings->phone5??"+"}}</a></p>
                                            <p><a href="{{'tel:'.$settings->phone6}}">{{$settings->phone6??"+"}}</a></p>
                                            <p><a href="{{'tel:'.$settings->phone7}}">{{$settings->phone7??"+"}}</a></p>

                                        </div>
                                        <div class="c-info-column">
                                            <div class="c-info-icon"><i class="fas fa-envelope"></i></div>
                                            <h3 class="twm-title">الدعم والمساعدة</h3>
                                             <br>
                                            <p><a href="mailto:{{$settings->email1??"mail@mail.com"}}"> {{$settings->email1??"mail@mail.com"}}</a></p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-form">
                                <!-- TITLE START-->
                                <div class="contact-form-title">
                                    <h2>كن على تواصل معنا</h2>
                                    <p>يمكنك الآن التواصل معنا من خلال رقم الجوال أو البريد الالكتروني.</p>
                                </div>
                                <!-- TITLE END-->
                                    <form id="Form" action="{{route('front.contact_us_action')}}" method="post" class="form-contact needs-validation " novalidate data-aos="fade-down">
@csrf
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <input  id="contact_name" name="name" type="text" data-validation="required"  class="form-control" placeholder="{{__('frontend.FullName')}}* ">
                                                <div class="invalid-feedback"> هذا الحقل ضروري </div>
                                                <div class="valid-feedback"> جيد </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-3">

                                                <input onkeypress="return isNumber(event)" data-validation="required" name="phone"   placeholder="{{__('frontend.Phone Number')}} *" type="text" class="form-control">
                                                <div class="invalid-feedback"> هذا الحقل ضروري </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group mb-3">

                                                <input type="text" data-validation="required" name="subject" required placeholder="{{__('frontend.Subject')}} " class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">

                                                <textarea class="form-control"  data-validation="required"  rows="5"  name="message" placeholder="{{__('frontend.Your Message')}} *"></textarea>
                                                <div class="invalid-feedback"> هذا الحقل ضروري </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" id="submit_button" class="send-button">ارسل الآن</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="page-contact-map">
        <div class="google-map">
             <iframe class="googleMap wow fadeInUp "
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3622.5023639147394!2d46.68399901500118!3d24.778245884092797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDQ2JzQxLjciTiA0NsKwNDEnMTAuMyJF!5e0!3m2!1sen!2ssa!4v1677309285941!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!--<iframe class="googleMap wow fadeInUp "-->
            <!--        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14903546.801014509!2d45.0741!3d24.222141999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2seg!4v1659632180387!5m2!1sar!2seg">-->
            <!--</iframe>-->
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).on('submit','form#Form',function(e) {
            e.preventDefault();
            var myForm = $("#Form")[0]
            var formData = new FormData(myForm)
            var url = $('#Form').attr('action');
            $.ajax({
                url:url,
                type: 'POST',
                data: formData,
                beforeSend: function(){
                    $('#submit_button').attr('disabled',true)
                    $('#submit_button').html(`<i class='fa fa-spinner fa-spin '></i>`)
                },
                complete: function(){

                },
                success: function (data) {
                    // var name = `${$("#contact_name").val()}`;
                    cuteAlert({
                        title: "{{__('frontend.Message Successfully Sent')}}",
                        message: `{{__('frontend.Thanks ,We will contact you as soon as possible.')}}`,
                        type: "success", // or 'info', 'error', 'warning'
                        buttonText: "{{__('frontend.confirm')}}"
                    });
                    $('#submit_button').attr('disabled',false)
                    $('#submit_button').html(`{{__('frontend.Send Message')}} <i class="fas fa-paper-plane ms-2"></i>
                                <span></span>`)

                    $('#Form')[0].reset();
                },
                error: function (data) {
                    if (data.status === 500) {

                    }
                    if (data.status === 422) {

                    }
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
$(document).on('submit','form#CompleteRegister',function(e) {
e.preventDefault();
// const codeHere = [];

var myForm = $("#CompleteRegister")[0]
var formData = new FormData(myForm)
var url = $('#CompleteRegister').attr('action');
$.ajax({
url:url,
type: 'POST',
data: formData,
beforeSend: function(){

},
complete: function(){

},
success: function (data) {

window.setTimeout(function() {
cuteToast({
type: "success", // or 'info', 'error', 'warning'
message: "{{__('frontend.good operation')}}",
timer: 3000
})
location.href = "/order_details/"+data.order_code
}, 2000);

},
error: function (data) {

if (data.status === 500) {
cuteToast({
type: "error", // or 'info', 'error', 'warning'
message: "يجب تسجيل الدخول لاستخدام هذة الخدمة",
timer: 3000
})
}
    if (data.status === 403) {
        cuteToast({
            type: "error", // or 'info', 'error', 'warning'
            message: "ﻻ يمكنك تتبع هذا الطلب",
            timer: 3000
        })
    }


},//end error method

cache: false,
contentType: false,
processData: false
});//end ajax
});//end submit
    </script>
@endsection
