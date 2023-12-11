@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.RegisterPage')}}
@endsection

@section('styles')
    <style>

    </style>
@endsection


@section('content')

    <div id="displaySectionHere">
        @include('frontend.pages.auth.register.parts.register-form')
        @include('frontend.pages.auth.register.parts.code')
    </div
@endsection

@section('js')

    <script>

        var timeOfSendingCode = 0;
        // Add validator
        $.formUtils.addValidator({
            name : 'validatePhoneNumberOfSAR',
            validatorFunction : function(value, $el, config, language, $form) {
                return /^(05)[0-9]{8}$|^(5)[0-9]{8}$/.test(value);
            },
            errorMessage : "{{__('frontend.phone format is incorrect')}}",
            errorMessageKey: 'validatePhoneNumberOfSAR'
        });


        $.formUtils.addValidator({
            name : 'repeatPassword',
            validatorFunction : function(value, $el, config, language, $form) {
                return value == $("#password").val()
            },
            errorMessage : "{{__('frontend.PasswordAndConfirmPasswordIsNotTheSame')}}",
            errorMessageKey: 'repeatPasswordKey'
        });

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

                return false;
            }

            return true;
        }


        $(".passwordEye").click(function() {

            $(this).find('.far').toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).closest('.passwordDiv').find('.passwordInput'));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        var codeSentToMobile
        $(document).on('submit','form#Form',function(e) {
            e.preventDefault();


            $("#nameInCode").val($("#name").val())
            $("#passwordInCode").val($("#password").val())
            $("#phoneInCode").val($("#Phone").val())
            $("#id_numInCode").val($("#id_num").val())

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
                            message: "{{__('frontend.Code Is Sent to Your phone')}}",
                            timer: 3000
                        })
                        $('#submit_button').attr('disabled',false)
                        $('#submit_button').html(`<p class="px-5">{{__('frontend.RegisterPage')}}</p> <span></span>`)
                        codeSentToMobile = data
                        $("#registerForm").hide()
                        $("#CodeForm").show()
                        $("#bannerCodeForm").show()
                        document.getElementById("vCodeIdFirst").focus();
                        timeOfSendingCode++
                    }, 2000);
                    {{--window.setTimeout(function() {--}}
                    {{--    cuteToast({--}}
                    {{--        type: "success", // or 'info', 'error', 'warning'--}}
                    {{--        message: "{{__('frontend.good operation')}}",--}}
                    {{--        timer: 3000--}}
                    {{--    })--}}
                    {{--    $('#CompleteRegisterButton').attr('disabled',false)--}}
                    {{--    $('#CompleteRegisterButton').html(`<p class="px-5">{{__('frontend.confirm')}}</p> <span></span>`)--}}
                    {{--    location.href = "{{route('auth.profile')}}"--}}
                    {{--}, 2000);--}}
                },
                error: function (data) {
                    $('#submit_button').attr('disabled',false)
                    $('#submit_button').html(`<p class="px-5">{{__('frontend.RegisterPage')}}</p> <span></span>`)

                    if (data.status === 403) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.the phone is already exists')}}",
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




    <script>
        var vCode = (function () {
            //cache dom
            var $inputs = $("#vCode").find("input");
            //bind events
            $inputs.on('keyup', processInput);
            //define methods
            function processInput(e) {
                var x = e.charCode || e.keyCode;
                if ((x == 8 || x == 46) && this.value.length == 0) {
                    var indexNum = $inputs.index(this);
                    if (indexNum != 0) {
                        $inputs.eq($inputs.index(this) - 1).focus();
                    }
                }
                if (ignoreChar(e))
                    return false;
                else if (this.value.length == this.maxLength) {
                    $(this).next('input').focus();
                }
            }
            function ignoreChar(e) {
                var x = e.charCode || e.keyCode;
                if (x == 37 || x == 38 || x == 39 || x == 40)
                    return true;
                else
                    return false
            }
        })();


        $(document).on('submit','form#CompleteRegister',function(e) {
            e.preventDefault();
            const codeHere = $(".vCode-input").val();
            // var inputs = $(".vCode-input").val();
            {{--for(var i = 0; i < inputs.length; i++){--}}
                {{--    if ($(inputs[i]).val() == '' || $(inputs[i]).val() == null){--}}
                {{--        cuteToast({--}}
                {{--            type: "error", // or 'info', 'error', 'warning'--}}
                {{--            message: "{{__('frontend.please , fill all input with correct code')}}",--}}
                {{--            timer: 3000--}}
                {{--        })--}}
                {{--        return 0--}}
                {{--    }else{--}}
                {{--        codeHere.push($(inputs[i]).val());--}}
                {{--    }--}}

                {{--}--}}
            if (codeSentToMobile != codeHere){
                cuteToast({
                    type: "error", // or 'info', 'error', 'warning'
                    message: "{{__('frontend.this code is wrong')}}",
                    timer: 3000
                })
                return 0;
            }

            $("#codeInCode").val(codeSentToMobile)
            var myForm = $("#CompleteRegister")[0]
            var formData = new FormData(myForm)
            var url = $('#CompleteRegister').attr('action');
            $.ajax({
                url:url,
                type: 'POST',
                data: formData,
                beforeSend: function(){
                    $('#CompleteRegisterButton').attr('disabled',true)
                    $('#CompleteRegisterButton').html(`<i class='fa fa-spinner fa-spin '></i>`)
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
                        $('#CompleteRegisterButton').attr('disabled',false)
                        $('#CompleteRegisterButton').html(`<p class="px-5">{{__('frontend.confirm')}}</p> <span></span>`)
                        location.href = "{{route('auth.profile')}}"
                    }, 2000);
                },
                error: function (data) {
                    $('#CompleteRegisterButton').attr('disabled',false)
                    $('#CompleteRegisterButton').html(`<p class="px-5">{{__('frontend.confirm')}}</p> <span></span>`)

                    if (data.status === 403) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.the phone is already exists')}}",
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
                    if (data.status === 415) {
                        var id=$('#old-cv-id').val();
                        var customer_support=$('#old-customer-id').val();
                        var url="/worker/"+id;
                        location.replace(url);
                        {{--var url = '{{route('front.completeTheRecruitmentRequest',":id")}}';--}}

                        {{--    url = url.replace(':id', id)+"?customerSupport="+customer_support;--}}

                        {{--    window.location="{{route('newrecriutment',[$id,$customer_id])}}";--}}




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


        $(document).on('click',"#registerAgain",function (e){
            e.preventDefault()
            $("#registerForm").show()
            $("#CodeForm").hide()
            $("#bannerCodeForm").hide()
            document.getElementById("vCodeIdFirst").blur();
        })


        $(document).on('click',"#sendCodeAgain",function (e){
            e.preventDefault()
            if ( $("#sendCodeAgain").attr('attr-code-sent') == 'sent')
            {
                $('#sendCodeAgain').html(`<i class='fa fa-spinner fa-spin '></i>`)
                window.setTimeout(function() {
                    $("#codeReceiveOrNot").html("{{__('frontend.CodeIsSentAgain')}}")
                    $("#Form").submit()
                    countdown(1)
                    $("#sendCodeAgain").attr('attr-code-sent',"no_send")
                }, 1000);

            }else{
                cuteToast({
                    type: "error", // or 'info', 'error', 'warning'
                    message: "{{__('frontend.Please wait until the time is up')}}",
                    timer: 3000
                })
                return 0;
            }

        })
        function goToRecriutment(id,customer_id){
            alert(true)
            var customer_support=customer_id;
            var url = '{{route('front.completeTheRecruitmentRequest',":id")}}';
            url = url.replace(':id', id)+"?customerSupport="+customer_support;
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function(){
                    ob.attr('disabled',true)
                    ob.html(`<i class='fa fa-spinner fa-spin '></i>`)
                },
                success: function(data){
                    ob.attr('disabled',false)
                    ob.html(`{{__('frontend.Recruitment Request')}}
                    <i class="fa-solid fa-briefcase ms-2"></i>`)
                    cuteAlert({
                        title: "{{__('frontend.Congratulation')}}",
                        message: `{{__('frontend.Thanks ,We will contact you as soon as possible.')}}`,
                        type: "success", // or 'info', 'error', 'warning'
                        buttonText: "{{__('frontend.ok')}}"
                    }).then((e)=>{
                        location.replace("{{route('auth.profile')}}")
                    })

                },
                error: function(data) {
                    ob.html(`{{__('frontend.Recruitment Request')}}
                    <i class="fa-solid fa-briefcase ms-2"></i>`)
                    if (data.status === 400) {
                        cuteToast({
                            type: "warning", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.this worker had reserved')}}",
                            timer: 3000
                        })
                    }

                    if (data.status === 500) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "{{__('frontend.there ar an error')}}",
                            timer: 3000
                        })
                    }
                }
            });

        }

        var timeoutHandle;
        function countdown(minutes) {
            var seconds = 60;
            var mins = minutes
            var counter = document.getElementById("sendCodeAgain");
            var current_minutes = mins-1

            let interval = setInterval(() => {
                seconds--;
                counter.innerHTML =
                    current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                // our seconds have run out
                if(seconds <= 0) {
                    // our minutes have run out
                    if(current_minutes <= 0) {
                        // we display the finished message and clear the interval so it stops.
                        counter.innerHTML = "{{__('frontend.ReSent')}}"
                        $("#codeReceiveOrNot").html("{{__('frontend.I did not receive the activation code')}}")
                        $("#sendCodeAgain").attr('attr-code-sent',"sent")
                        clearInterval(interval);
                    } else {
                        // otherwise, we decrement the number of minutes and change the seconds back to 60.
                        current_minutes--;
                        seconds = 60;
                    }
                }

                // we set our interval to a second.
            }, 1000);
        }

    </script>
@endsection
