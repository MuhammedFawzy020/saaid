@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.visa')}}
@endsection

@section('styles')
    <style>
    </style>
@endsection


@section('content')

    <content>
        <!-- ================ banner ================= -->


        <section class="mainBanner">
            <h1>     {{__('frontend.Employment Arrival')}} </h1>
            <ul>
                <li>
                    <a href="{{route('home')}}"> {{__('frontend.Home')}} </a>
                </li>
                <li>
                    <a href="#!" class="active">  {{__('frontend.Employment Arrival')}}</a>
                </li>
            </ul>

        </section>

        <!-- ================  / banner ================= -->

        <!-- ================ /arrive Worker ================= -->
        <div class="arriveWorker">
            <div class="container">
                <!-- arrive Worker Info -->
                <div class="arriveWorkerInfo">
                    <div class="image " data-aos=" fade-up">
                        <img src="{{asset('frontend')}}/img/arrive.webp">
                    </div>
                    <div class="info " data-aos=" fade-up">
                        <h3>{{$recruitmentTrip->employment_arrival_title??''}} </h3>
                        <p>
                            {{$recruitmentTrip->employment_arrival_desc??''}}
                        </p>
                        <h5>عائلتك اسعد ,حياتك افضل </h5>
                    </div>
                </div>
                <!-- arrive Worker Info -->
                <div class="arriveWorkerInfo">
                    <div class="image " data-aos=" fade-up">
                        <img src="{{asset('frontend')}}/img/f1.webp">
                    </div>
                    <div class="info " data-aos=" fade-up">
                        <h3> {{$recruitmentTrip->customers_service_title??''}} </h3>
                        <p>
                            {{$recruitmentTrip->customers_service_desc??''}}

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================ references ================= -->

        @include('frontend.pages.recruitmentTrip.references')


    </content>



@endsection
