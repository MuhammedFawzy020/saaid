@extends('frontend.layouts.layout')

@section('title')

    {{__('frontend.Labor selection')}}
@endsection

@section('styles')
    <style>
    </style>
@endsection


@section('content')

    <content>


        <!-- Main Banner  -->
        <section class="mainBanner">
            <h1>   {{__('frontend.Labor selection')}} </h1>
            <ul>
                <li>
                    <a href="{{route('home')}}"> {{__('frontend.Home')}} </a>
                </li>
                <li>
                    <a href="#!" class="active">  {{__('frontend.Labor selection')}}</a>
                </li>
            </ul>

        </section>


        <!-- ================ /recruitmentContract contract ================= -->

        <!-- ============= end steps =============  -->

        <!-- ================ /arrive Worker ================= -->
        <div class="arriveWorker">
            <div class="container">
                <!-- arrive Worker Info -->
                <div class="arriveWorkerInfo">
                    <div class="image " data-aos=" fade-up">
                        <img src="{{asset('frontend')}}/img/recruitment-contract.webp">
                    </div>
                    <div class="info " data-aos=" fade-up">
                        <p>
                        {{$recruitmentTrip->recruitment_contract_desc??''}}
                        <div>


                            <a href="{{route('all-workers')}}" class="defaultBtn mx-1">
                            {{trans('frontend.start recruitment')}}
                            <span></span>
                        </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- ================ references ================= -->
        @include('frontend.pages.recruitmentTrip.references')
    </content>

@endsection
