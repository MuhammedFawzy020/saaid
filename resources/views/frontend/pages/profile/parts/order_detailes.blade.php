@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.profile')}}
@endsection

@section('styles')
    <style>
    </style>
@endsection


@section('content')

    <!-- INNER PAGE BANNER -->
    <div class=" overlay-wraper page-banner">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="banner-content">
                <div class="banner-title">
                    <div class="banner-title-name">
                        <h2> طلباتى </h2>
                    </div>
                </div>
                <div>
                    <ul class="page-breadcrump list-unstyled">
                        <li><a href="{{route('home')}}">الرئيسية</a></li>
                        <li><a href="{{route('auth.profile')}}"> طلباتي </a></li>
                        <li> تفاصيل الطلب </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- order details -->

    <section class="orderDetails">
        <!--  routeNav -->
        <div class="routeNav">
            <button onclick="history.back()" class="Back">
                <i class="fa-solid fa-angle-right"></i>
            </button>
            <ul>
                <li>
                    <a href="{{route('auth.profile')}}">{{__('frontend.My Orders')}}</a>
                </li>
                <li>
                    <a href="#!" class="active"> {{__('frontend.Order details')}} </a>
                </li>
            </ul>
        </div>
        <!-- status -->
        <div class="status">
            <ol>

                {{--                'new','contract','under_work','musaned','traning','visa','finished','canceled'--}}
                <li @if(in_array($order->status,[ 'new','contract','under_work','musaned','traning','visa','finished'])) class="completed" @endif>
                    <p>اختيار العمالة </p>
                </li>
                <li @if(in_array($order->status,[ 'contract','under_work','musaned','traning','visa','finished'])) class="completed" @endif>
                    <p>حجز السيره الذاتية </p>
                </li>

                <li @if(in_array($order->status,[ 'contract','musaned','traning','visa','finished'])) class="completed" @endif>
                    <p>ابرام التعاقد </p>
                </li>
                <li @if(in_array($order->status,[ 'musaned','traning','visa','finished'])) class="completed" @endif>
                    <p>  تم الربط في مساند</p>
                </li>
                <li @if(in_array($order->status,[ 'traning','visa','finished'])) class="completed" @endif>
                    <p> تحت الاجراء و التدريب</p>
                </li>
                <li @if(in_array($order->status,[ 'visa','finished'])) class="completed" @endif>
                    <p> اصدار تاشيرة </p>
                </li>
                <li @if(in_array($order->status,['finished'])) class="completed" @endif>
                    <p>وصول العمالة </p>
                </li>

            </ol>

        </div>
        <div class="profileContent p-0">
            <div class="profile-order-content row">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12">
                    <div class="order-media">
                        <div class="order-media-pic">
                            <img src="{{get_file($order->biography->images[0]->image??'')}}" alt="#">

                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-9 col-sm-12">
                    <div class="order-content">
                        <h4> {{$order->biography->job?$order->biography->job->title:""}}  </h4>
                        <p> {{__('frontend.RecruitmentCurrent')}} </p>
                        <p class="order-number"><i class="fa-regular fa-suitcase"></i> {{$order->order_code}}</p>

                        <div class="order-details">
                            <div class="view-button">
                                <a href="{{get_file($order->biography->cv_file)}}" target="_blank" class="download"><i class="fa-regular fa-download"></i>
                                    {{__('frontend.Download CV')}}
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="selectedCustomer">
            <img src="{{asset('frontend')}}/images/img/customerService2.png" alt="">

            <h4 class="massage">
                {{__('frontend.customerSupport')}} <span> {{$admin->name}} </span>
            </h4>
            <div class="contactType">
                <a class="contact" href="https://wa.me/+966{{$admin->whatsapp}}" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                    <p> {{__('frontend.Contact via WhatsApp')}}   </p>
                </a>
                <a class="contact" href="tel:{{$admin->phone}}" target="_blank">
                    <i class="fa-solid fa-phone"></i>
                    <p>    {{__('frontend.Contact via Phone')}}</p>

                </a>
            </div>
        </section>
    </section>











@endsection

@section('js')

@endsection
