@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Recruitment Request')}}
@endsection




@section('content')
    <!-- banner -->
    {{--    <div class="banner"></div>--}}
    <div class=" overlay-wraper page-banner" style="height: 100px;">
        <div class="overlay-main"></div>
        <div class="container">
        </div>
    </div>
    <!-- select Customer Service -->

    <section class="selectCustomerService">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 p-2">
                    <div class="headTitle">
                        <h1> اختر احد مندوبي خدمة العملاء </h1>
                        <p>
                            {{__('frontend.Please choose a customer service representative to continue completing the contract and complete the recruitment')}}

                        </p>
                    </div>
                    {{--                    <form action="selected_customer_service.html">--}}
                    <div class="choose" >
                        @foreach($admins as $admin)
                            <!--  customer -->
                            <div class="customerOption " data-aos=" fade-up">
                                <input type="radio" class="btn-check " value="{{$admin->id}}" name="customer" id="option{{$admin->id}}">
                                <label class="btn btn-outline" for="option{{$admin->id}}">
                                    <img src="{{asset('frontend')}}/img/img/customerService2.png" alt="">
                                    <span> {{$admin->name}} </span>
                                </label>
                            </div>

                        @endforeach

                    </div>
                    <div class=" pt-4 p-2 text-center">
                        <button  attr-id="{{$cv->id}}"   class="btn px-5 btn-success m-auto Recruitment_Request">
                            {{__('frontend.Recruitment Request')}}
                        </button>

                    </div>
                    {{--                    </form>--}}
                </div>
            </div>
        </div>
    </section>



@endsection

@section('js')



@endsection
