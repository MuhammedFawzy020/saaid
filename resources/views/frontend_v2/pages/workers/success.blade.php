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
            <h1 class="display-4 mt-3 color-white">
                تهانينا لقد إستلمنا طلبك و سنتواصل معك بأسرع وقت يمكن
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

        <div class="container text-center">
            <h1 class="display-5 mb-2">
                لقد تم ارسال الطلب بنجاح
            </h1>
            <p class="mb-4">
                يمكنك متابعة طلبك عن طريق متابعة الطلب و ادخال رقم الطلب الخاص بكـ # {{ $order->order_code }}
            </p>
            <h5 class="mb-2">
                أو يمكن التواصل مع {{ $order->admin->name }} عن طريق الخيارات المتاحة
            </h5>
            <p>
                <a href="https://wa.me/+966{{ $order->admin->whats_up_number }}" class="btn btn-outline-secondary">
                    من خلال الواتساب <i class="bx bxl-whatsapp"></i>
                </a>
                <a href="tel:0{{ $order->admin->phone }}" class="btn btn-outline-secondary">
                    من خلال الاتصال المباشر <i class="bx bx-phone"></i>
                </a>
            </p>
        </div>
    </div>
@endsection
