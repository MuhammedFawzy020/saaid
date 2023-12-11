@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Forget Password Page')}}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')

{{--    <!-- banner -->--}}
{{--    <div class="banner">--}}
{{--        <h1>  {{__('frontend.Restore password')}}  </h1>--}}
{{--        <ul>--}}
{{--            <li> <a href="{{route('home')}}">{{__('frontend.Home')}}  </a> </li>--}}
{{--            <li> <a href="{{route('auth.login')}}"> {{__('frontend.Login')}} </a> </li>--}}
{{--            <li> <a href="#!" class="active"> {{__('frontend.Restore password')}} </a> </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <!-- authPages -->--}}
{{--    <section class="authPages otp">--}}
{{--        <div class="container">--}}
{{--                <form id="forget_password"  method="post" action="{{route('auth.forget_password_action')}}">--}}
{{--                    @csrf--}}

{{--                    <img class="pageImg" src="{{asset('frontend')}}/img/password.svg" alt="">--}}
{{--                <p> {{__('frontend.Enter your phone number to recover your password.')}} </p>--}}
{{--                <!-- inputField -->--}}
{{--                <div class="inputField">--}}

{{--                    <div class="input-group">--}}
{{--                        <input data-validation="required,validatePhoneNumberOfSAR" id="phone" onkeypress="return isNumber(event)" name="phone"   type="text" class="form-control"   placeholder="5********">--}}
{{--                        <span class="input-group-text" style="direction: ltr;"> +996 </span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <button class="btn btn-success" id="submit_button" type="submit"> تاكيد </button>--}}

{{--            </form>--}}
{{--        </div>--}}
{{--    </section>--}}

<br>
<br>
<br>

<div class="page-content">
    <!-- Login Section Start -->
    <div class="login-section">
        <div class="container-fluid">
            <div class="login-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-5 login-media-row">
                        <div class="login-media">
                            <div class="login-image">
                                <img src="{{asset('frontend')}}/img/img/Forgot password.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="login-detail">
                            <div class="login-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('frontend')}}/img/logo/logoH.png" alt="" class="logo">
                                </a>
                            </div>
                            <div class="login-detail-inner">
                                <div class="login-title text-center">
                                    <div class="title-heading">
                                        <span>اعادة تعيين كلمة السر </span>
                                    </div>
                                </div>
                                <form id="forget_password"  method="post" action="{{route('auth.forget_password_action')}}">
                                    @csrf
                                    <div class="login-form register-form">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-2">
                                                    <input data-validation="required,validatePhoneNumberOfSAR" id="phone" onkeypress="return isNumber(event)" name="phone"   type="text" class="form-control"   placeholder="5********">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" id="submit_button"  class="site-button"> تأكيد</button>
                                                </div>
                                            </div>
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
</div>

@endsection

@section('js')

    <script>
        // Add validator
        $.formUtils.addValidator({
            name : 'validatePhoneNumberOfSAR',
            validatorFunction : function(value, $el, config, language, $form) {
                return /^(5)(5|0|3|6|4|9|1|8|7|2)([0-9]{7})$/.test(value);
            },
            errorMessage : "{{__('frontend.phone format is incorrect')}}",
            errorMessageKey: 'badEvenNumber'
        });

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

                return false;
            }

            return true;
        }

        $(document).on('submit','form#forget_password',function(e) {
            e.preventDefault();
            var myForm = $("#forget_password")[0]
            var formData = new FormData(myForm)
            var url = $('#forget_password').attr('action');
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

                    //$('#submit-button').prop('disabled', true);

                    window.setTimeout(function() {
                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.good operation')}}",
                            timer: 3000
                        })
                        $('#submit_button').attr('disabled',false)
                        $('#submit_button').html(`<p class="px-5">{{__('frontend.Send Reset Password Link')}}</p> <span></span>`)
                        location.replace("{{route('auth.forget-email-sent-successfully')}}")
                    }, 2000);

                },
                error: function (data) {
                    $('#submit_button').attr('disabled',false)
                    $('#submit_button').html(`<p class="px-5">{{__('frontend.Send Reset Password Link')}}</p> <span></span>`)

                    if (data.status === 400) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.the phone is not exists')}}",
                            timer: 3000
                        })
                    }

                    if (data.status === 500) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.the phone is already exists')}}",
                            timer: 3000
                        })
                    }
                    if (data.status === 422) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.please , fill all input with correct data')}}",
                            timer: 3000
                        })
                    }//end if

                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });//end ajax
        });//end submit
    </script>
@endsection
