@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Recruitment Request')}}
@endsection




@section('content')

    <div class=" overlay-wraper page-banner" style="height: 100px;">
        <div class="overlay-main"></div>
        <div class="container">
        </div>
    </div>

    <section class="selectedCustomer selected-page">

        <img src="{{asset('frontend')}}/img/customerService2.svg" alt="">

        <h4 class="massage">
            {{__('frontend.Please communicate with')}} <span> {{$admin->name}} </span>{{__('frontend.Which you chose within 24 hours so that the CV reservation is not cancelled')}}
        </h4>
        <div class="contactType">
            <a class="contact" href="https://wa.me/+966{{$admin->whats_up_number}}" target="_blank">
                <i class="ri-whatsapp-line"></i>
                <p> {{__('frontend.Contact via WhatsApp')}}   </p>
            </a>
            <a class="contact" href="tel:0{{$admin->phone}}" target="_blank">
                <i class="ri-phone-fill"></i>
                <p>    {{__('frontend.Contact via Phone')}}</p>

            </a>
        </div>
    </section>
@endsection

@section('js')



@endsection
