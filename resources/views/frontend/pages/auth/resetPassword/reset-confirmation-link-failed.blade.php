@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Expire Page')}}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')

    <br>
    <br>
    <br>


    <div class="page-content">
        <!-- Login Section Start -->
        <div class="login-section">
            <div class="container-fluid">
                <div class="login-content">
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="login-detail">
                                <div class="login-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('frontend')}}/img/logo/logoH.png" alt="" class="logo">
                                    </a>
                                </div>
                                <div class="login-detail-inner">
                                    <div class="login-title text-center">
                                        <div class="title-heading">
                                            <span>{{__('frontend.Create a password')}}  </span>
                                        </div>
                                    </div>

                                    <div class="login-form register-form">
                                        <div class="formCard row">
                                            <div class="circleBlur"></div>
                                            <div class="circleBlur2"></div>
                                            <div class="col-md-12 p-2 text-center">
                                                <img class="loginImg" style="height: 120px!important;width: 120px!important;" src="{{asset('frontend/img/expired.png')}}" alt="">
                                                <h6 class="text-center mb-4 mt-4">{{__('frontend.The page has expired')}}</h6>
                                                <h6 class="text-center mb-4"><a href="{{route('home')}}">{{__('frontend.GoToHome')}}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>



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


@endsection
