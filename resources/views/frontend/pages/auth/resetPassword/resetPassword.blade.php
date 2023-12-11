@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.resetPassword')}}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')

    <div class="page-content">
        <!-- Login Section Start -->
        <div class="login-section">
            <div class="container-fluid">
                <div class="login-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-5 login-media-row">
                            <div class="login-media">
                                <div class="login-image">
                                    <img src="{{asset('frontend')}}/images/img/Forgot password.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-7">
                            <div class="login-detail">
                                <div class="login-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('frontend')}}/images/logo/logoH.png" alt="" class="logo">
                                    </a>
                                </div>
                                <div class="login-detail-inner">
                                    <div class="login-title text-center">
                                        <div class="title-heading">
                                            <span>اعادة تعيين كلمة السر </span>
                                        </div>
                                    </div>
                                    <form method="post" id="Form" action="{{route('auth.reset_password_action')}}" class="row">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <div class="login-form register-form">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-2">
                                                        <input name="password" data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" placeholder="كلمة المرور*">

{{--                                                        <input name="pass1" type="password" required="" class="form-control" placeholder="كلمة المرور">--}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-2">
                                                        <input name="password" data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" placeholder="تأكيد كلمة المرور*">

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" id="submit_button" class="site-button"> {{__('frontend.change Password')}}</button>
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
























{{--    <!-- banner -->--}}
{{--    <div class="banner">--}}
{{--        <h1>{{__('frontend.Create a password')}} </h1>--}}
{{--        <ul>--}}
{{--            <li> <a href="{{route('home')}}">{{__('frontend.Home')}}  </a> </li>--}}
{{--            <li> <a href="{{route('auth.login')}}">  {{__('frontend.Login')}}  </a> </li>--}}
{{--            <li> <a href="#!" class="active"> {{__('frontend.Create a password')}}    </a> </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <!-- authPages -->--}}
{{--    <section class="authPages otp">--}}
{{--        <div class="container">--}}
{{--            <form method="post" id="Form" action="{{route('auth.reset_password_action')}}" class="row">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="id" value="{{$user->id}}">--}}
{{--                <img class="pageImg" src="{{asset('frontend')}}/img/shield.svg" alt="">--}}
{{--                <div class="row flex-wrap m-0" style="gap:24px;">--}}
{{--                    <div class="col p-0">--}}
{{--                        <!-- inputField -->--}}
{{--                        <div class="inputField passwordDiv">--}}
{{--                            <label for="password">--}}
{{--                                <i class="ri-lock-fill"></i>--}}
{{--                                {{__('frontend.newPassword')}}--}}
{{--                            </label>--}}
{{--                            <input name="password" data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" placeholder="*****">--}}
{{--                            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col p-0">--}}
{{--                        <!-- inputField -->--}}
{{--                        <div class="inputField passwordDiv">--}}
{{--                            <label for="confirmPassword">--}}
{{--                                <i class="ri-lock-fill"></i>--}}
{{--                                {{__('frontend.ConfirmNewPassword')}}--}}
{{--                            </label>--}}
{{--                            <input name="password" data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" placeholder="*****">--}}
{{--                            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <button id="submit_button" class="btn btn-success" type="submit"> {{__('frontend.change Password')}} </button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <section class="account">--}}
{{--        <div class="container">--}}
{{--            <div class="formCard row">--}}
{{--                <div class="circleBlur"></div>--}}
{{--                <div class="circleBlur2"></div>--}}
{{--                <div class="col-md-6 p-2">--}}
{{--                    <img class="loginImg" src="{{asset('frontend')}}/img/Reset.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-md-6 p-2">--}}
{{--                    <form method="post" id="Form" action="{{route('auth.reset_password_action')}}" class="row">--}}
{{--                        @csrf--}}
{{--                        <input type="hidden" name="id" value="{{$user->id}}">--}}
{{--                        <div class="col-md-12 p-2 passwordDiv">--}}
{{--                            <label for="password" class="form-label"> <i class="fas fa-key me-2"></i> {{__('frontend.newPassword')}}  </label>--}}
{{--                            <input name="password" data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" placeholder="*****">--}}
{{--                            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 p-2 passwordDiv">--}}
{{--                            <label for="repetPassword" class="form-label"> <i class="fas fa-key me-2"></i>{{__('frontend.ConfirmNewPassword')}} </label>--}}
{{--                            <input  data-validation="required,repeatPassword"  name="confirm_password" type="password" class="form-control passwordInput" id="repetPassword" placeholder="*****">--}}
{{--                            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}
{{--                        </div>--}}

{{--                        <div class="col-12 py-4 p-2 text-center">--}}
{{--                            <button id="submit_button" class="customBtn " type="submit"> <p class="px-5"> {{__('frontend.change Password')}} </p>--}}
{{--                                <span></span>--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection

@section('js')
    <script>

        $.formUtils.addValidator({
            name : 'repeatPassword',
            validatorFunction : function(value, $el, config, language, $form) {
                return value == $("#password").val()
            },
            errorMessage : "{{__('frontend.PasswordAndConfirmPasswordIsNotTheSame')}}",
            errorMessageKey: 'repeatPasswordKey'
        });

        $(".passwordEye").click(function() {

            $(this).find('.far').toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).closest('.passwordDiv').find('.passwordInput'));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
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

                    window.setTimeout(function() {
                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.good operation')}}",
                            timer: 3000
                        })
                        $('#submit_button').attr('disabled',false)
                        $('#submit_button').html(`<p class="px-5">{{__('frontend.change Password')}}</p> <span></span>`)
                        location.replace("{{route('auth.login')}}")

                    }, 2000);

                },
                error: function (data) {
                    $('#submit_button').attr('disabled',false)
                    $('#submit_button').html(`<p class="px-5">{{__('frontend.change Password')}}</p> <span></span>`)


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
