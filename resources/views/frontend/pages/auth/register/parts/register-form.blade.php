<br>
<br>

<div class="page-content" id="registerForm">
    <!-- Login Section Start -->
    <div class="login-section" >
<div class="container-fluid">
    <div class="login-content">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-5 login-media-row">
                <div class="login-media">
                    <div class="login-image">
                        <img src="{{asset('frontend')}}/img/img/login-bg.png" alt="">
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
                                <span>انشاء حساب</span>
                            </div>
                        </div>
                        <form method="post" action="{{route('checkPhoneToSendOtp')}}" id="Form">
                            <div class="login-form register-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-2">
                                            <input data-validation="required,length" data-validation-length="min2" placeholder=" اسم المستخدم" type="text" class="form-control" name="name" id="name" >

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-2">
{{--                                            <input name="phone" type="tel" required="" class="form-control" placeholder="رقم الهاتف">--}}
                                            <div class="input-group">-
                                                <input onkeypress="return isNumber(event)" data-validation="required,validatePhoneNumberOfSAR" type="number" class="form-control" id="Phone" name="phone" placeholder="رقم الهاتف">
{{--                                                <span class="input-group-text" style="direction: ltr;"> +996 </span>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
{{--                                            <input name="Password" type="password" class="form-control" required="" placeholder="كلمة المرور*">--}}
                                            <input data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" name="password" placeholder="كلمة المرور*">
                                            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
{{--                                            <input name="Password" type="password" class="form-control" required="" placeholder="تأكيد كلمة المرور*">--}}
                                            <input data-validation="required,repeatPassword" type="password" class="form-control passwordInput" id="repetPassword" name="repeatPassword" placeholder="تأكيد كلمة المرور*">
                                            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="site-button">انشاء حساب</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-check-label new-account">بالفعل لدى حساب ؟
                                                <a href="{{route('auth.login')}}" class="login-href">  تسجيل الدخول </a></label>
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












{{--<div class="banner"> </div>--}}
{{--<section class="authPages"  id="registerForm">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-end g-4">--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="info">--}}
{{--                    <div class="links">--}}
{{--                        <a class="link" href="{{route('auth.login')}}"> {{__('frontend.Login')}} </a>--}}
{{--                        <a class="link active" href="{{route('register')}}"> {{__('frontend.Create an account')}} </a>--}}
{{--                    </div>--}}
{{--                    <p>     {{__('frontend.Create an account and enjoy our services ...')}} </p>--}}
{{--                </div>--}}
{{--                <form method="post" action="{{route('checkPhoneToSendOtp')}}" id="Form">--}}
{{--                    <!-- inputField -->--}}
{{--                    <div class="inputField">--}}
{{--                        <label for="name">--}}
{{--                            <i class="ri-user-3-fill"></i>--}}
{{--                            {{__('frontend.FullName')}}*--}}
{{--                        </label>--}}
{{--                         <input data-validation="required,length" data-validation-length="min2" type="text" class="form-control" name="name" id="name" placeholder="{{__('frontend.enter FullName')}}">--}}

{{--                    </div>--}}
{{--                    <!-- inputField -->--}}
{{--                    <div class="inputField">--}}
{{--                        <label for="phone">--}}
{{--                            <i class="ri-phone-fill"></i>--}}
{{--                            {{__('frontend.phone')}}*--}}
{{--                        </label>--}}
{{--                        <div class="input-group">---}}
{{--                          <input onkeypress="return isNumber(event)" data-validation="required,validatePhoneNumberOfSAR" type="number" class="form-control" id="Phone" name="phone" placeholder="">--}}
{{--                             <span class="input-group-text" style="direction: ltr;"> +996 </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row flex-wrap m-0" style="gap:24px;">--}}
{{--                        <div class="col p-0">--}}
{{--                            <!-- inputField -->--}}
{{--                            <div class="inputField passwordDiv">--}}
{{--                                <label for="password">--}}
{{--                                    <i class="ri-lock-fill"></i>--}}
{{--                                    {{__('frontend.Password')}}*--}}
{{--                                </label>--}}
{{--                                <input data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" name="password" placeholder="*****">--}}
{{--                                                        <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col p-0">--}}
{{--                            <!-- inputField -->--}}
{{--                            <div class="inputField passwordDiv">--}}
{{--                                <label for="confirmPassword">--}}
{{--                                    <i class="ri-lock-fill"></i>--}}
{{--                                    {{__('frontend.confirmPassword')}} *--}}
{{--                                </label>--}}
{{--                                <input data-validation="required,repeatPassword" type="password" class="form-control passwordInput" id="repetPassword" name="repeatPassword" placeholder="*****">--}}
{{--                                                        <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="btn btn-success" type="submit"> {{__('frontend.RegisterPage')}} </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 d-none d-lg-block">--}}
{{--                <img class="pageImg" src="{{asset('frontend')}}/img/register.svg" alt="">--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
