@extends('frontend_v2.layout.app')
@section('title')
    تتبع الطلبات
@endsection

@section('keywords')
    <meta name="keywords"
        content="تتبع,طلب,تتبع طلب,طلب الاستقدام,طلب الإستقدام,طلب شركة إستقدام,شركة إستقدام,مساند,اسرع طلب">
@endsection


@section('content')
    <style>
        .status {
            position: relative;
            padding: 20px 10px;
            background-color: rgba(25, 103, 210, 0.18);
            border-radius: 8px;
            border: 1px solid #00897e;
            overflow: hidden;
        }

        .status ol {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-between;
        }

        .status ol li {
            position: relative;
            text-align: center;
            padding: 0 5px;
            width: 100%;
        }

        .status ol li:before {
            content: "";
            width: 25px;
            height: 25px;
            display: block;
            border-radius: 50%;
            background: #fff;
            margin: 0 auto 4px auto;
            border: 3px solid #00897e;
        }

        .status ol li:not(:last-child)::after {
            content: "";
            width: 100%;
            height: 2px;
            display: block;
            background: #00897e;
            margin: 0;
            position: absolute;
            top: 12px;
            right: calc(50% + 12px);
        }

        .status ol li.completed:before {
            background: #00897e;
        }

        .status ol p {
            margin-top: 10px;
        }
    </style>
    <div class="">
        <div class="row m-0 p-0 mb-4 p-4 text-center">
            {{-- need background image spanke home page ;) --}}
            <h2 class="display-3 mt-3 ">
                يمكنكـ الان تتبع طلبك
            </h2>
            <figure class="p-2 mb-3">
                <blockquote class="blockquote">
                    <p></p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    أفضل شركة استقدام العمالة المنزلية بمعايير دولية ومهنية عالية
                </figcaption>
            </figure>
        </div>

        <form method="get" action="{{ route('track_order_view') }}">
            @csrf
            <div class="row m-0 p-0 mb-4 mt-4 backgound-color-orange p-4">
                <div class="col-12 text-center mb-2 ">
                    <h3 class="color-white">
                        <b class="color-white">
                            تتبع الطلب
                        </b>
                    </h3>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="form-group mb-2">
                        <label class="text-white">

                            رقم الطلب

                        </label>
                        <input type="text" value="{{ request()->get('order_code') }}" class="form-control"
                            placeholder="NKXXXXXXXXXX" required name="order_code" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mb-2">
                        <label class="text-white">

                            رقم الهاتف

                        </label>
                        <input type="tel" value="{{ request()->get('phone') }}" class="form-control"
                            placeholder="5XXXXXXXX" required name="phone" />
                    </div>
                </div>

                <div class="col-12 text-center mt-2 mb-2 ">
                    <button type="submit" class="btn btn-light w-25">
                        إبحث
                    </button>

                </div>
            </div>
        </form>

        <div class="row m-0 p-0">
            @if (isset($order))
                <div class="col-md-12">
                    <div dir="rtl" class="container">

                        <div class="row m-0 p-0">
                            <div class="col-md-3">
                                <h4>
                                    <b>
                                        بيانات العميل
                                    </b>
                                </h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>
                                                إسم العميل
                                            </th>
                                            <td>
                                                {{ $order->user?->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                رقم الهاتف
                                            </th>
                                            <td>
                                                {{ $order->user?->phone }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-3">
                                <h4>
                                    <b>
                                        بيانات خدمة العملاء
                                    </b>
                                </h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>
                                                إسم خدمة العملاء
                                            </th>
                                            <td>
                                                {{ $order->admin?->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                رقم الهاتف
                                            </th>
                                            <td>
                                                <a href="tel:{{ $order->admin?->phone }}" class="text-decoration-none">
                                                    {{ $order->admin?->phone }}
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                رقم الواتساب
                                            </th>
                                            <td>
                                                <a href="tel:{{ $order->admin?->whats_up_number }}"
                                                    class="text-decoration-none">
                                                    {{ $order->admin?->whats_up_number }}
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h4>
                                    <b>بيانات الطلب</b>
                                </h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <th>
                                            رقم الطلب
                                        </th>
                                        <td>
                                            {{ $order->order_code }}
                                        </td>


                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-12 mt-2 mb-2">
                                <h4>
                                    <b>
                                        حالة الطلب
                                    </b>
                                </h4>
                                <div class="status">
                                    <ol>

                                        {{--                'new','contract','under_work','musaned','traning','visa','finished','canceled' --}}
                                        <li @if (in_array($order->status, ['new', 'contract', 'under_work', 'musaned', 'traning', 'visa', 'finished'])) class="completed" @endif>
                                            <p>اختيار العمالة </p>
                                        </li>
                                        <li @if (in_array($order->status, ['contract', 'under_work', 'musaned', 'traning', 'visa', 'finished'])) class="completed" @endif>
                                            <p>حجز السيره الذاتية </p>
                                        </li>

                                        <li @if (in_array($order->status, ['contract', 'musaned', 'traning', 'visa', 'finished'])) class="completed" @endif>
                                            <p>ابرام التعاقد </p>
                                        </li>
                                        <li @if (in_array($order->status, ['musaned', 'traning', 'visa', 'finished'])) class="completed" @endif>
                                            <p> تم الربط في مساند</p>
                                        </li>
                                        <li @if (in_array($order->status, ['traning', 'visa', 'finished'])) class="completed" @endif>
                                            <p> تحت الاجراء و التدريب</p>
                                        </li>
                                        <li @if (in_array($order->status, ['visa', 'finished'])) class="completed" @endif>
                                            <p> اصدار تاشيرة </p>
                                        </li>
                                        <li @if (in_array($order->status, ['finished'])) class="completed" @endif>
                                            <p>وصول العمالة </p>
                                        </li>

                                    </ol>

                                </div>
                            </div>

                            <div class="col-md-12 mt-2 mb-2">
                                <h4>
                                    <b>
                                        بيانات العامل / ة
                                    </b>
                                </h4>
                                <div class="profileContent p-0">
                                    <div class="profile-order-content row">
                                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12">
                                            <div class="order-media">
                                                <div class="order-media-pic">
                                                    <img src="{{ url('/frontend/images/users/' . ($order->biography->images[0]->image ?? '')) }}"
                                                        alt="صورة {{ $order->biography?->name ?? 'العامل' }}">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-9 col-md-9 col-sm-12">
                                            <div class="order-content">
                                                <h3>
                                                    {{ $order->biography?->name }}
                                                </h3>
                                                <h5> {{ $order->biography->job ? $order->biography->job->title : '' }}
                                                </h5>
                                                <p> {{ __('frontend.RecruitmentCurrent') }} </p>
                                                <p class="order-number"><i class="fa-regular fa-suitcase"></i>
                                                    {{ $order->order_code }}</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="container">
                        <h2 class="display-6 text-center text-danger">
                            لم نتمكن من العثور علي النتائج مطابقة
                        </h2>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <script>
        window.onload = function() {
            const preloader = document.querySelector(".preloader");
            preloader.style.display = "none";
        };
    </script>
@endsection
