@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.customer services')}}
@endsection

@section('styles')
    <style>
    </style>
@endsection


@section('content')






    <content>
    <!-- ================ select Customer Service ================= -->
    <section class="selectCustomerService">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 p-2">
                    <div class="headTitle">
                        <h1> اختر احد مندوبي خدمة العملاء </h1>
                        <p>
                            يرجى اختيار احد ممثلي خدمة العملاء لمواصلة إتمام التعاقد واكمال الإستقدام
                        </p>
                    </div>
                    <form action="selected-customer-service.html">
                        <div class="choose">
                            @foreach($admins as $admin)
                            <div class="customerOption " data-aos=" fade-up">
                                <input type="radio" value="{{$admin->id}}" class="btn-check" name="customer" id="option1">
                                <label class="btn btn-outline" for="option1">
                                    <img src="{{get_fi}}" alt="">
                                    <span> {{$admin->name}} </span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <div class=" pt-4 p-2 text-center">


                            <button type="submit" class="animatedLink">
                                تأكيد
                                <i class="fa-regular fa-left-long ms-2"><span></span></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




</content>



@endsection
