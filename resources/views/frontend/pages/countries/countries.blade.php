@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Application for the recruitment of domestic workers')}}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')
    <!-- INNER PAGE BANNER -->
    <div class=" overlay-wraper page-banner">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="banner-content">
                <div class="banner-title">
                    <div class="banner-title-name">
                        <h2> دول الاستقدام </h2>
                    </div>
                </div>
                <div>
                    <ul class="page-breadcrump list-unstyled">
                        <li><a href="{{route('home')}}">الرئيسية</a></li>
                        <li> دول الاستقدام </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================== Countries ========================================== -->
    <section class="Countries-section" id="Countries">
        <div class="container-fluid">
            <div class="Countries-title">
                <div class="Countries-title-heading">
                    <h6> دول الاستقدام </h6>
                </div>
                <h2> اختيار الدولة التي تتم عملية الاستقدام منها</h2>
            </div>
            <div class="Countries-boxes">
                <div class="row">
                    @foreach($countries as $key=> $country)
                        <div class="col-lg-3 col-md-6">
                            <div class="Countries-block">
                                <div class="Countries-media">
                                    <div> <img src="{{get_file($country->image)}}" alt=""/></div>
                                </div>
                                <div class="Countries-content">
                                    <div class="count-content-title">{{$country->title}}</div>
                                    <p>{{$country->description}} </p>
                                    <a href="{{route('all-workers',['country'=>$country->id])}}" class="defaultBtn"> اطلب الآن </a>
                                </div>
                            </div>
                        </div>
                        @if($key==3 or $key==7 or $key==15)
                            <div class="col-lg-2"></div>
                        @endif
                    @endforeach

                </div>
            </div>

        </div>

    </section>

@endsection

@section('js')
    <script>
$(document).on('submit','form#CompleteRegister',function(e) {
e.preventDefault();
// const codeHere = [];

var myForm = $("#CompleteRegister")[0]
var formData = new FormData(myForm)
var url = $('#CompleteRegister').attr('action');
$.ajax({
url:url,
type: 'POST',
data: formData,
beforeSend: function(){

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
location.href = "/order_details/"+data.order_code
}, 2000);

},
error: function (data) {

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


},//end error method

cache: false,
contentType: false,
processData: false
});//end ajax
});//end submit
    </script>
@endsection
