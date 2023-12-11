@extends('frontend_v2.layout.app')
@section('title')
    طلب استقدام
@endsection
@section('keywords')
    <meta name="keywords"
        content="عاملات منزلية,استقدام,عمالة منزلية,سائق,سائقين,مساند,مكتب استقدام,استقدام سائق خاص,استقدام عماله منزليه,مكتب استقدام الرياض,مكتب استقدام جدة,مكتب استقدام عماله منزلية,مكتب استقدام سائق,خدمات الاستقدام,روافد للاستقدام,مواقع مكاتب الاستقدام,مساند مكاتب استقدام,مساند للاستقدام,استقدام عاملة منزلية,استقدام الرياض,منصة مساند,ارخص مكتب استقدام,افضل مكتب استقدام,تقديم شغالات,استقدام عامل منزلي,اقرب مكتب استقدام من موقعي,اسعار تقديم الخادمات,شروط استقدام سائق خاص,شروط استقدام عامل منزلي,شروط الاستقدام,مكاتب الاستقدام المعتمدة,مكاتب الاستقدام المعتمدة من وزارة العمل,مكتب استقدام سائق خاص,مكاتب استقدام من الفلبين بالرياض,اسعار استقدام العاملات المنزلية,أفضل مكتب استقدام في الرياض,مكتب استقدام شمال الرياض,استقدام خادمة سيرلانكية,مكتب استقدام كينيا الرياض,مكاتب استقدام فلبينيات بالرياض">
@endsection
@section('content')
    <div class="">
        <div class="row m-0 p-0  p-4 text-center backgound-color-orange mb-4">
            {{-- need background image like home page ;) --}}
            <h1 class="display-3 mt-3 color-white">
                علي بعد خطوة واحدة من إرسال الطلب
            </h1>
            <figure class="p-2">
                <blockquote class="blockquote">
                    <p></p>
                </blockquote>
                <figcaption class="blockquote-footer color-white">
                    أفضل شركة استقدام العمالة المنزلية بمعايير دولية ومهنية عالية
                </figcaption>
            </figure>
        </div>

        <div class="container selectCustomerService">
            <form method="post" action="{{ route('front.crp', $cv->id) }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label>الإسم كاملا</label> <small class="text-danger"> إلزامي </small>
                                    <input type="name" value="{{ old('name') }}" required class="form-control"
                                        name="name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label> رقم الهاتف </label> <small class="text-danger"> إلزامي </small>
                                    <input name="phone" type="tel" placeholder="5XXXXXX" required
                                        class="form-control" />
                                </div>
                            </div>

                        </div>

                        <div class="headTitle">
                            <h1> </h1>
                            <p>
                                {{ __('frontend.Please choose a customer service representative to continue completing the contract and complete the recruitment') }}

                            </p>
                        </div>

                        {{--                    <form action="selected_customer_service.html"> --}}
                        <div class="choose">
                            @foreach ($admins as $admin)
                                <!--  customer -->
                                <div class="customerOption " data-aos=" fade-up">
                                    <input type="radio" class="btn-check " value="{{ $admin->id }}" name="customer"
                                        id="option{{ $admin->id }}">
                                    <label class="btn btn-outline" for="option{{ $admin->id }}">
                                        <img src="{{ asset('frontend') }}/img/img/customerService2.png" alt="">
                                        <span> {{ $admin->name }} </span>
                                    </label>
                                </div>
                            @endforeach

                        </div>


                        <div class=" pt-4 p-2 text-center">
                            <button type="submit" class="btn px-5 btn-success m-auto ">
                                {{ __('frontend.Recruitment Request') }}
                            </button>

                        </div>
                        {{--                    </form> --}}
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
