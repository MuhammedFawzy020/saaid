<br>
<br>
<br>
<br>
<br>
<br>

<div class="page-content" id="CodeForm" style="display: none">
        <!-- Login Section Start -->
        <div class="login-section">
            <div class="container-fluid">
                <div class="login-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-5 login-media-row">
                            <div class="login-media">
                                <div class="login-image">
                                    <img src="{{asset('frontend')}}/images/img/otp.png" alt="">
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
                                <div class="login-detail-inner" >
                                    <div class="login-title text-center">
                                        <div class="title-heading">
                                            <span class="otp"> كود التفعيل </span>
                                            <p>كود التفعيل الموجود مؤقتا للرقم 5XXXXXXXX </p>
                                        </div>
                                    </div>
                                    <form id="CompleteRegister" method="post" action="{{route('register_action')}}" class="row">
                                        @csrf
                                        <div class="login-form register-form">
                                            <div class="row">
                                                <div class="col-lg-12">


                                                    <input type="hidden" id="old-cv-id" name="id" value="{{$id}}">
                                                    <input type="hidden" id="old-customer-id" name="customer_id" value="{{$customer_id}}">

                                                    <input type="hidden" name="name" value="" id="nameInCode">
                                                    <input type="hidden" name="password" value="" id="passwordInCode">
                                                    <input type="hidden" name="phone" value="" id="phoneInCode">
                                                    <div class="inputField otpField" id="vCode">
                                                        <input type="number" class="form-control vCode-input" name="code"  id="codeInCode" placeholder=" كود التفعيل مؤقتا ! " >
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button class="site-button" type="submit" id="CompleteRegisterButton" >  {{__('frontend.confirm')}}  </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-md-12 p-2">
                                        <p class="text-center pt-4 pb-2"> <span id="codeReceiveOrNot">{{__('frontend.I did not receive the activation code')}}</span> <a href="#" id="sendCodeAgain" attr-code-sent="sent"> {{__('frontend.ReSent')}} </a>
                                            {{__('frontend.changePhoneAgain')}}
                                            <a id="registerAgain" href="#"> {{__('frontend.from here')}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>








{{--<!-- banner -->--}}
{{--<div class="banner" id="bannerCodeForm" style="display: none">--}}
{{--    <h1> كود التفعيل </h1>--}}
{{--    <ul>--}}
{{--        <li> <a href="{{route('home')}}">{{__('frontend.Home')}}  </a> </li>--}}
{{--        <li> <a href="register.html"> انشاء حساب  </a> </li>--}}
{{--        <li> <a href="#!" class="active"> كود التفعيل </a> </li>--}}
{{--    </ul>--}}
{{--</div>--}}
{{--<!-- authPages -->--}}
{{--<section class="authPages otp" id="CodeForm" style="display: none">--}}
{{--    <div class="container">--}}
{{--        <form id="CompleteRegister" method="post" action="{{route('register_action')}}" class="row">--}}
{{--            @csrf--}}
{{--            <img class="pageImg" src="{{asset('frontend')}}/img/otp.svg" alt="">--}}
{{--            <p>  {{__('frontend.PleaseEnterTheSentCode')}}  5XXXXXXXX  </p>--}}
{{--            <!-- inputField -->--}}
{{--            <input type="hidden" id="old-cv-id" name="id" value="{{$id}}">--}}
{{--            <input type="hidden" id="old-customer-id" name="customer_id" value="{{$customer_id}}">--}}

{{--            <input type="hidden" name="name" value="" id="nameInCode">--}}
{{--            <input type="hidden" name="password" value="" id="passwordInCode">--}}
{{--            <input type="hidden" name="phone" value="" id="phoneInCode">--}}
{{--            <div class="inputField otpField" id="vCode">--}}
{{--                <input type="number" class="form-control vCode-input" name="code" value="" id="codeInCode" placeholder=" ادخل كود التفعيل ">--}}
{{--            </div>--}}

{{--            <button class="btn btn-success" type="submit" id="CompleteRegisterButton" >  {{__('frontend.confirm')}}  </button>--}}
{{--        </form>--}}
{{--        <div class="col-md-12 p-2">--}}
{{--            <p class="text-center pt-4 pb-2"> <span id="codeReceiveOrNot">{{__('frontend.I did not receive the activation code')}}</span> <a href="#" id="sendCodeAgain" attr-code-sent="sent"> {{__('frontend.ReSent')}} </a>--}}
{{--                {{__('frontend.changePhoneAgain')}}--}}
{{--                <a id="registerAgain" href="#"> {{__('frontend.from here')}}</a>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}





{{--<section class="account" id="CodeForm" style="display: none">--}}
{{--    <div class="container">--}}
{{--        <div class="formCard row">--}}
{{--            <div class="circleBlur"></div>--}}
{{--            <div class="circleBlur2"></div>--}}
{{--            <div class="col-md-6 p-2">--}}
{{--                <img class="loginImg" src="{{asset('frontend')}}/img/otp.svg" alt="">--}}
{{--            </div>--}}
{{--            <div class="col-md-6 p-2">--}}
{{--                <form id="CompleteRegister" method="post" action="{{route('register_action')}}" class="row">--}}
{{--                    @csrf--}}
{{--                    <input type="hidden" id="old-cv-id" name="id" value="{{$id}}">--}}
{{--                    <input type="hidden" id="old-customer-id" name="customer_id" value="{{$customer_id}}">--}}

{{--                    <input type="hidden" name="name" value="" id="nameInCode">--}}
{{--                    <input type="hidden" name="password" value="" id="passwordInCode">--}}
{{--                    <input type="hidden" name="phone" value="" id="phoneInCode">--}}
{{--                    <input type="hidden" name="code" value="" id="codeInCode">--}}

{{--                    <div class="col-12 p-2 text-center">--}}
{{--                        <label class="form-label"> {{__('frontend.PleaseEnterTheSentCode')}} <span> 5XXXXXXXX </span> </label>--}}
{{--                        <div class="vCode " id="vCode" >--}}
{{--                            <input id="vCodeIdFirst" onkeypress="isNumber(evt)"  type="number" class="vCode-input mx-1" maxlength="1">--}}
{{--                            <input type="number"  onkeypress="isNumber(evt)"  class="vCode-input mx-1" maxlength="1">--}}
{{--                            <input type="number"   onkeypress="isNumber(evt)" class="vCode-input mx-1" maxlength="1">--}}
{{--                            <input type="number"  onkeypress="isNumber(evt)"  class="vCode-input mx-1" maxlength="1">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 p-2 text-center">--}}
{{--                        <button id="CompleteRegisterButton" class="customBtn " type="submit">--}}
{{--                            <p class="px-5"> {{__('frontend.confirm')}} </p>--}}
{{--                            <span></span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}

{{--            </div>--}}
{{--            <div class="col-md-12 p-2">--}}
{{--                <p class="text-center pt-4 pb-2"> <span id="codeReceiveOrNot">{{__('frontend.I did not receive the activation code')}}</span> <a href="#" id="sendCodeAgain" attr-code-sent="sent"> {{__('frontend.ReSent')}} </a>--}}
{{--                   {{__('frontend.changePhoneAgain')}}--}}
{{--                    <a id="registerAgain" href="#"> {{__('frontend.from here')}}</a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
