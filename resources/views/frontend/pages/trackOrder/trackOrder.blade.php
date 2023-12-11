@extends('frontend.layouts.layout')

@section('title')
    {{ __('frontend.Application for the recruitment of domestic workers') }}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')
    {{--    <div class="banner"> --}}
    {{--        <h1> {{__('frontend.Track your order')}}  </h1> --}}
    {{--        <ul> --}}
    {{--            <li> <a href="{{route('home')}}">{{__('frontend.Home')}}  </a> </li> --}}
    {{--            <li> <a href="#!" class="active"> {{__('frontend.Track your order')}}  </a> </li> --}}
    {{--        </ul> --}}
    {{--    </div> --}}
    {{--    <!-- trackOrder --> --}}
    {{--    <section class="trackOrder"> --}}
    {{--        <div class="container"> --}}
    {{--            <div class="formWimg"> --}}
    {{--                <form action="{{route('track_order')}}" id="CompleteRegister" method="post"> --}}
    {{--                    @csrf --}}
    {{--                    <div class="inputField"> --}}
    {{--                        <label for="track"> --}}
    {{--                            <i class="ri-map-pin-range-fill"></i> --}}
    {{--                            {{__('frontend.Enter the order number')}} --}}
    {{--                        </label> --}}
    {{--                        <input id="track" type="text"  name="code" class="form-control" placeholder=" ادخل هنا " required> --}}
    {{--                    </div> --}}
    {{--                    <button class="btn btn-success"  id="CompleteRegister" type="submit"> {{__('frontend.Track your order')}} </button> --}}
    {{--                </form> --}}
    {{--                <img src="{{asset('frontend')}}img/steps.svg" alt=""> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </section> --}}
    {{--    <!-- trackOrder --> --}}

    <!-- INNER PAGE BANNER -->
    <div class=" overlay-wraper page-banner">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="banner-content">
                <div class="banner-title">
                    <div class="banner-title-name">
                        <h2> تتبع طلبك</h2>
                    </div>
                </div>
                <div>
                    <ul class="page-breadcrump list-unstyled">
                        <li><a href="{{ route('home') }}">الرئيسية</a></li>
                        <li>تتبع طلبك</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- =========================================== trackOrder ======================================== -->
    <section class="trackOrder">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <form action="{{ route('track_order') }}" id="CompleteRegister" method="post">
                        @csrf
                        <div class="inputField">
                            <label for="track">
                                <i class="fa-solid fa-map-pin"></i>
                                {{ __('frontend.Enter the order number') }}
                            </label>
                            <input id="track" type="text" name="code" class="form-control"
                                placeholder=" ادخل هنا " required>
                        </div>
                        <button class="btn track-btn" id="CompleteRegister" type="submit">
                            {{ __('frontend.Track your order') }} </button>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="trackorder-image">
                        <img src="{{ asset('frontend') }}/img/img/ab-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(document).on('submit', 'form#CompleteRegister', function(e) {
            e.preventDefault();
            // const codeHere = [];

            var myForm = $("#CompleteRegister")[0]
            var formData = new FormData(myForm)
            var url = $('#CompleteRegister').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function() {

                },
                complete: function() {

                },
                success: function(data) {

                    window.setTimeout(function() {
                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "{{ __('frontend.good operation') }}",
                            timer: 3000
                        })
                        location.href = "/order_details/" + data.order_code
                    }, 2000);

                },
                error: function(data) {

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


                }, //end error method

                cache: false,
                contentType: false,
                processData: false
            }); //end ajax
        }); //end submit
    </script>
@endsection
