@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Login Page')}}
@endsection

@section('styles')
    <style>
    </style>
@endsection


@section('content')

{{--    <!-- authPages -->--}}
{{--    <section class="authPages">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-end g-4">--}}
{{--                <div class="col-lg-7">--}}
{{--                    <div class="info">--}}
{{--                        <div class="links">--}}
{{--                            <a class="link active" href="{{route('auth.login')}}"> {{__('frontend.Login')}} </a>--}}
{{--                            <a class="link " href="{{route('register')}}"> {{__('frontend.Create an account')}} </a>--}}
{{--                        </div>--}}
{{--                        <p> {{__('frontend.Log in now and request the employment you want')}}  </p>--}}
{{--                    </div>--}}

{{--                        <form  method="post" action="{{route('auth.login_action')}}"  id="Form">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="worker_id" value="{{$id}}">--}}

{{--                            <!-- inputField -->--}}
{{--                        <div class="inputField">--}}
{{--                            <label for="phone">--}}
{{--                                <i class="ri-phone-fill"></i>--}}
{{--                                {{__('frontend.Phone Number')}}--}}
{{--                            </label>--}}
{{--                            <div class="input-group">---}}
{{--                            <input  name="phone" autocomplete="off" data-validation="required,validatePhoneNumberOfSAR" type="number" class="form-control" id="phone" placeholder="">--}}
{{--                            <span class="input-group-text" style="direction: ltr;"> +996 </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- inputField -->--}}
{{--                        <div class="inputField">--}}
{{--                            <label for="password">--}}
{{--                                <i class="ri-lock-fill"></i>--}}
{{--                                {{__('frontend.Password')}}--}}
{{--                            </label>--}}
{{--                            <input data-validation="required" type="password" name="password" class="form-control" id="password" placeholder="*****">--}}
{{--                        </div>--}}
{{--                        <!-- inputField -->--}}
{{--                        <div class="d-flex justify-content-between ">--}}
{{--                            <div class="form-check">--}}
{{--                                <input type="checkbox" name="remember_me" class="form-check-input" id="remember">--}}

{{--                                <label class="form-check-label" for="remember"> {{__('frontend.remember me')}} </label>--}}
{{--                            </div>--}}
{{--                            <a href="{{route('auth.forget_password_view')}}"> {{__('frontend.forget Password ?')}}  </a>--}}
{{--                        </div>--}}
{{--                        <button class="btn btn-success" id="submit_button"  type="submit">    <p> {{__('frontend.Login')}} </p> </button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 d-none d-lg-block">--}}
{{--                    <img class="pageImg" src="{{asset('frontend')}}/img/login.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-md-12 p-2">--}}
{{--                    <p class="text-center pt-4 pb-2"> {{__("frontend.you don't have account ?")}} <a href="{{route('register')}}"> {{__('frontend.create account')}} </a> </p>--}}
{{--                </div>--}}
{{--            </div>--}}
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
                    <div class="col-xl-7 col-lg-6 col-md-5 login-media-row">
                        <div class="login-media">
                            <div class="login-image">
                                <img src="{{asset('frontend')}}/img/img/login-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-7">
                        <div class="login-detail">
                            <div class="login-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('frontend')}}/img/logo/logoH.png" alt="" class="logo">
                                </a>
                            </div>
                            <div class="login-detail-inner">
                                <div class="login-title text-center">
                                    <div class="title-heading">
                                        <span>تسجيل الدخول</span>
                                    </div>
                                </div>
{{--                                <form class="form-horizontal" id="Form" method="post" action="{{route('admin.login.submit')}}">--}}
                                    <form  method="post" action="{{route('auth.login_action')}}"  id="Form">
                                    @csrf
                                    <div class="login-form">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input  name="phone" autocomplete="off" data-validation="required,validatePhoneNumberOfSAR" type="number" class="form-control" id="phone"  placeholder="رقم الهاتف" >

{{--                                                    <input name="phone" type="tel" required="" class="form-control" placeholder="رقم الهاتف">--}}
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">

                                                    <input data-validation="required" type="password" name="password" class="form-control" id="password" placeholder="كلمة المرور*" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="twm-forgot-wrap">
                                                    <div class="form-group mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" name="remember_me" class="form-check-input" id="remember">
                                                            <label class="form-check-label rem-forgot" for="remember"> {{__('frontend.remember me')}}
                                                                <a href="{{route('auth.forget_password_view')}}" class="site-text-primary"> {{__('frontend.forget Password ?')}}  </a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="site-button">تسجيل الدخول</button>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-check-label new-account">ليس لديك حساب ؟<a href="{{route('register')}}"> تسجيل حساب جديد</a></label>
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
                return /^(05)[0-9]{8}$|^(5)[0-9]{8}$/.test(value);
            },
            errorMessage : "{{__('frontend.phone format is incorrect')}}",
            errorMessageKey: 'badEvenNumber'
        });


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

                    //$('#submit-button').prop('disabled', true);

                    window.setTimeout(function() {
                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.good operation')}}",
                            timer: 3000
                        })
                        $('#submit_button').attr('disabled',false)
                        $('#submit_button').html(`<p>{{__('frontend.Login')}}</p> <span></span>`)
                        window.location.href='{{route('auth.profile')}}';
                    }, 1000);

                },
                error: function (data) {
                    $('#submit_button').attr('disabled',false)
                    $('#submit_button').html(`<p>{{__('frontend.Login')}}</p> <span></span>`)
                    if (data.status === 400) {
                        cuteToast({
                            type: "warning", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.your account had blocked , please sent to support')}}",
                            timer: 3000
                        })
                    }

                    if (data.status === 500) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.Your Phone Or Password Is Not Correct')}}",
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
                    if(data.status===415){
                        var url="{{route('all-workers')}}";
                        location.replace(url);
                    }

                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });//end ajax


        });//end submit


        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

                return false;
            }

            return true;
        }
    </script>

@endsection

