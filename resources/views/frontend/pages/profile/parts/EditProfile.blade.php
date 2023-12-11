
<div class="profile-edit">

<form class="form-contact form-edit"  method="post" action="{{route('profile.changeBasicDataOFProfile')}}" id="Form">
    <!-- inputField -->
    <div class="inputField">

        <label for="username"> <i class="fa-regular fa-user"></i>  {{__('frontend.FullName')}}*</label>

        <input value="{{$user->name}}" data-validation="required,length" data-validation-length="min2" type="text" class="form-control" name="name" id="name" placeholder="{{__('frontend.enter FullName')}}">

    </div>
    <!-- inputField -->
    <div class="inputField" id="registerForm">

        <label for="phone"> <i class="fa-regular fa-phone"></i>   {{__('frontend.phone')}}*</label>
        <input  value="{{$user->phone}}"  onkeypress="return isNumber(event)" data-validation="required,validatePhoneNumberOfSAR" type="text" class="form-control" id="Phone" name="phone" placeholder="5********">

    </div>
    <button class="send-button" id="submit_button"  type="submit"> {{__('frontend.ok')}} </button>

</form>
<br>
<section  id="CodeForm" style="display: none">
    <form id="CompleteRegister" method="post" action="{{route('ChangePhoneProfile')}}" class="form-contact form-edit">
        @csrf
        <input type="hidden" name="name" value="" id="nameInCode">
        <input type="hidden" name="password" value="" id="passwordInCode">
        <input type="hidden" name="phone" value="" id="phoneInCode">
        {{--                    <input type="hidden" name="code" value="" id="codeInCode">--}}

        <div class="inputField">
            <label for="name">

                {{__('frontend.PleaseEnterTheSentCode')}} <span> 5XXXXXXXX </span>
            </label>

            <div class="inputField otpField" id="vCode">
                <input type="number" class="form-control vCode-input" name="code" value="" id="codeInCode" placeholder=" ادخل كود التفعيل ">
            </div>
        </div>


        <button class="send-button" id="CompleteRegisterButton"  type="submit"> {{__('frontend.ok')}} </button>

    </form>
    <div class="col-md-12 p-2">
        <p class="text-center pt-4 pb-2"> <span id="codeReceiveOrNot">{{__('frontend.I did not receive the activation code')}}</span> <a href="#" id="sendCodeAgain" attr-code-sent="sent"> {{__('frontend.ReSent')}} </a>
            {{__('frontend.changePhoneAgain')}}
            <a id="registerAgain" href="#">{{__('frontend.from here')}}</a>
        </p>
    </div>

</section>

<br>
    <form class="form-contact form-edit" method="post" action="{{route('profile.changePasswordOFProfile')}}"  id="FormPassword">
        <!-- inputField -->
    <div class="row flex-wrap m-0" style="gap:24px;">
        <div class="col p-0">
            <!-- inputField -->
            <div class="inputField passwordDiv">

                <label for="password"> <i class="fa-regular fa-lock"></i>    {{__('frontend.Password')}}* </label>
                <input data-validation="length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" name="password" placeholder="*****">
                <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>
            </div>
        </div>
        <div class="col p-0">
            <!-- inputField -->
            <div class="inputField passwordDiv" >

                <label for="password"> <i class="fa-regular fa-lock"></i> {{__('frontend.confirmPassword')}} * </label>

                <input data-validation="repeatPassword" type="password" class="form-control passwordInput" id="repetPassword" name="repeatPassword" placeholder="*****">
                <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>
            </div>
        </div>
    </div>
    <button class="send-button" id="submit_buttonPassword"  type="submit"> {{__('frontend.ok')}} </button>
</form>
</div>


{{--<div class="editProfile">--}}
{{--    <div class="head">--}}
{{--        <h5> <i class="fas fa-user me-2"></i> {{__('frontend.Personal Info')}}</h5>--}}
{{--    </div>--}}
{{--    <form method="post" action="{{route('profile.changeBasicDataOFProfile')}}" class="row" id="Form">--}}
{{--        @csrf--}}
{{--        <div class="col-12 p-2">--}}
{{--            <div class="profilePic">--}}
{{--                <input name="logo" type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{!is_null($user->logo)?get_file($user->logo):asset('frontend/img/user.jpg')}}" />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 p-2">--}}
{{--            <label for="name" class="form-label"> <i class="fas fa-user me-2"></i> {{__('frontend.FullName')}}* </label>--}}
{{--            <input value="{{$user->name}}" data-validation="required,length" data-validation-length="min2" type="text" class="form-control" name="name" id="name" placeholder="{{__('frontend.enter FullName')}}">--}}
{{--        </div>--}}
{{--        <div class="col-md-12 p-2">--}}
{{--            <label for="city" class="form-label"> <i class="fa-solid fa-city me-2"></i> {{__('frontend.City')}} </label>--}}
{{--            <select data-validation="required" name="city_id" id="city" class="select2">--}}
{{--                @if ($user->city_id != null)--}}
{{--                    <option value=""> {{__('frontend.selectCity')}} </option>--}}
{{--                @endif--}}
{{--                @foreach($cities as $city)--}}
{{--                    <option {{$user->city_id == $city->id ?"selected":""}} value="{{$city->id}}"> {{$city->title}} </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="col-12 pt-4 p-2 text-center">--}}

{{--            <button id="submit_button" class="customBtn " type="submit">--}}
{{--                <p class="px-5">{{__('frontend.ok')}}</p>--}}
{{--                <span></span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<!--  -->--}}
{{--<div class="editProfile">--}}
{{--    <div class="head">--}}
{{--        <h5> <i class="fas fa-key me-2"></i> {{__('frontend.change Password')}} </h5>--}}
{{--    </div>--}}
{{--    <form method="post" action="{{route('profile.changePasswordOFProfile')}}" class="row" id="FormPassword">--}}
{{--        @csrf--}}

{{--        <div class="col-md-6 p-2 passwordDiv">--}}
{{--            <label for="password" class="form-label"> <i class="fas fa-key me-2"></i> {{__('frontend.Password')}}* </label>--}}
{{--            <input data-validation="required,length" data-validation-length="min6" type="password" class="form-control passwordInput" id="password" name="password" placeholder="*****">--}}
{{--            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 p-2 passwordDiv">--}}
{{--            <label for="repetPassword" class="form-label"> <i class="fas fa-key me-2"></i> {{__('frontend.confirmPassword')}} *--}}
{{--            </label>--}}
{{--            <input data-validation="required,repeatPassword" type="password" class="form-control passwordInput" id="repetPassword" name="repeatPassword" placeholder="*****">--}}
{{--            <span style="display: none" class="eye passwordEye"><i class="far fa-eye"></i></span>--}}
{{--        </div>--}}
{{--        <div class="col-12 pt-4 p-2 text-center">--}}
{{--            <button id="submit_buttonPassword" class="customBtn " type="submit">--}}
{{--                <p class="px-5">{{__('frontend.ok')}}</p>--}}
{{--                <span></span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}

<!--  -->
{{--<div class="editProfile">--}}
{{--    <div class="head">--}}
{{--        <h5> <i class="fas fa-key me-2"></i> {{__('frontend.phone Settings')}} </h5>--}}
{{--    </div>--}}
{{--    <div id="displaySectionHere">--}}
{{--        <section id="registerForm">--}}
{{--            <form method="post" action="{{route('checkPhoneToSendOtpTOChangePhone')}}" class="row" id="ChangePhoneForm">--}}
{{--                @csrf--}}

{{--                <div class="col-12 p-2">--}}
{{--                    <label for="Phone" class="form-label"> <i class="fas fa-phone-alt me-2"></i> {{__('frontend.phone')}}* </label>--}}
{{--                    <input onkeypress="return isNumber(event)" data-validation="required,validatePhoneNumberOfSAR" type="text" class="form-control" id="Phone" name="phone" placeholder="5********">--}}
{{--                </div>--}}


{{--                <div class="col-12 pt-4 p-2 text-center">--}}

{{--                    <button id="submit_button_for_phone_change" class="customBtn " type="submit">--}}
{{--                        <p class="px-5">{{__('frontend.ok')}}</p>--}}
{{--                        <span></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </section>--}}


    </div>
</div>
