@extends('frontend_v2.layout.app')
@section('title')
    تفاصيل الطلب
@endsection

@section('keywords')
    <meta name="keywords"
        content="عاملات منزلية,استقدام,عمالة منزلية,سائق,سائقين,مساند,مكتب استقدام,استقدام سائق خاص,استقدام عماله منزليه,مكتب استقدام الرياض,مكتب استقدام جدة,مكتب استقدام عماله منزلية,مكتب استقدام سائق,خدمات الاستقدام,روافد للاستقدام,مواقع مكاتب الاستقدام,مساند مكاتب استقدام,مساند للاستقدام,استقدام عاملة منزلية,استقدام الرياض,منصة مساند,ارخص مكتب استقدام,افضل مكتب استقدام,تقديم شغالات,استقدام عامل منزلي,اقرب مكتب استقدام من موقعي,اسعار تقديم الخادمات,شروط استقدام سائق خاص,شروط استقدام عامل منزلي,شروط الاستقدام,مكاتب الاستقدام المعتمدة,مكاتب الاستقدام المعتمدة من وزارة العمل,مكتب استقدام سائق خاص,مكاتب استقدام من الفلبين بالرياض,اسعار استقدام العاملات المنزلية,أفضل مكتب استقدام في الرياض,مكتب استقدام شمال الرياض,استقدام خادمة سيرلانكية,مكتب استقدام كينيا الرياض,مكاتب استقدام فلبينيات بالرياض">
@endsection

<style>
    body {
        overflow-x: hidden;
    }

    .personal-info .name {
        text-align: right;
    }

    @media (max-width: 780px) {
        .personal-info .name {
            text-align: center;
        }

        .personal-info {
            text-align: center;
            padding: 10px;
        }
    }

    p {
        font-size: 24px;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="cv-comp text-center" style="padding:20px;">
                    <a id="downloadPdfBtn" class="btn btn-danger d-none">
                        تحميل السيفي
                    </a>

                    <a href="{{ route('frontend.show.worker', $cv->id) }}" class="btn btn-secondary">
                        احجز الان

                    </a>

                </div>
                <div class="card"
                    style="padding:3px;height:100%;margin:20px; border: 5px solid #5B79AFl;height:fit-content"
                    id="pdf-content">
                    <!-- <div class="card-image">
                                                                                                                                                                                                                                                                            <img src="{{ url('/') }}/uploads/biographies/jpg_380767767_293762706729927_6351962171673681789_n.jpg_1699986336.jpg" alt="" style="width:100px;height:100px;">
                                                                                                                                                                                                                                                                        </div> -->

                    <div class="card-header" style="padding:0px !important;border:none !important;">
                        <div class="card col-lg-12" style="border:none;">
                            <div class="card-header " style="border:1px solid #5B79AF;border-radius:20px;">
                                <div class="row">

                                    <div class="personal-image col-12 text-center" style="padding:0px;">
                                        @if ($cv->cv_file)
                                            <a href="{{ url('frontend/images/users/' . $cv->cv_file) }}" data-fancybox
                                                data-caption="{{ $cv->name }}">
                                                <img src="{{ url('frontend/images/users/' . $cv->cv_file) }}"
                                                    style="width:auto;height:300px;border-style: solid;
    border-color: #5B79AF;
    border-radius: 50%; " />
                                            </a>
                                        @else
                                            <img src="{{ url('/') }}/frontend/images/comment-1-1.jpg"
                                                style="width:auto;height:45px " alt="">
                                        @endif


                                    </div>

                                    <div class="personal-info col-lg-12">
                                        <h3 class="name text-center mb-4 mt-2"
                                            style="padding:0px;margin:0px;font-weight:bold;">
                                            @if ($cv->name)
                                                {{ $cv->name }}
                                            @else
                                                لا يوجد اسم
                                            @endif
                                        </h3>
                                        <div class="row">
                                            <div class="col-lg-4" style="padding:0px;">المهنة :
                                                <p><b>{{ $cv->job?->title }}</b></p>
                                            </div>
                                            <div class="col-lg-4" style="padding:0px;">الراتب الشهري :
                                                <p><b>{{ $cv->salary }} ريال</b></p>
                                            </div>
                                            <div class="col-lg-4" style="padding:0px;">مده التعاقد :
                                                <p><b>{{ $cv->contract_period }} شهر</b> </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card col-lg-12" style="border:none;font-size:large">
                            <div class="card-header"
                                style="background-color:#5B79AF;text-align:center;border-radius:20px;margin-top:20px;padding:0px;color:white;font-weight:bold;">
                                <p style="padding:0px;margin:0px;color:white;">البيانات الشخصية</p>
                            </div>
                            <div class="card-body" style="font-size:large;text-align:right">
                                <div class="row">
                                    <div class="col-lg-3" style="border-left:2px solid #5B79AF;padding-right:10px;">
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">الجنسية : </p>
                                            <p style="font-weight:bolder;">{{ $cv->nationalitie?->title }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">الحالة الاجتماعية : </p>
                                            <p style="font-weight:bolder;">{{ $cv->social_type?->title }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">الديانة : </p>
                                            <p style="font-weight:bolder;">{{ $cv->religion?->title }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">التعليم : </p>
                                            <p style="font-weight:bolder;">{{ $cv->education }}</p>
                                        </div>

                                    </div>
                                    <div class="col-lg-3" style="border-left:2px solid #5B79AF;padding-right:10px;">
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">الوزن : </p>
                                            <p style="font-weight:bolder;">{{ $cv->weight }}</p>
                                        </div>

                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">العمر : </p>
                                            <p style="font-weight:bolder;">{{ $cv->age }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">عدد الاطفال : </p>
                                            <p style="font-weight:bolder;">{{ $cv->no_of_childrens }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">الطول : </p>
                                            <p style="font-weight:bolder;">{{ $cv->height }}</p>
                                        </div>

                                    </div>
                                    <div class="col-lg-3" style="border-left:2px solid #5B79AF;padding-right:10px;">
                                        <div class="row" style="margin-bottom:20px;">
                                            {{-- 
                                                    $created_at = explode(' ', $cv->birthdate);
                                                    $birth_date = $created_at[0];
                                                    --}}
                                            <p style="margin:0px;">تاريخ الميلاد : </p>
                                            <?php
                                            // $carbonDate = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $cv->birthdate);
                                            // $dateOnly = $carbonDate->format('Y-m-d');
                                            ?>
                                            <p style="font-weight:bolder;">{{ $cv->birthdate }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">مكان الميلاد : </p>
                                            <p style="font-weight:bolder;">{{ $cv->birth_country }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">رقم التواصل : </p>
                                            <p style="font-weight:bolder;">{{ $cv->phone_no }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">اللغة الأم : </p>
                                            <p style="font-weight:bolder;">{{ $cv->language_title?->title }}</p>
                                        </div>

                                    </div>
                                    <div class="col-lg-3" style="padding-right:10px;">
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">سعر الستقدام : </p>
                                            <p style="font-weight:bolder;">{{ $cv->recruitment_price }}
                                                ريال</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">الراتب : </p>
                                            <p style="font-weight:bolder;">{{ $cv->salary }} ريال</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">الخبرة السابقة : </p>
                                            <p style="font-weight:bolder;">{{ $cv->type_of_experience }}</p>
                                        </div>
                                        <div class="row" style="margin-bottom:20px;">
                                            <p style="margin:0px;">مدة الضمان : </p>
                                            <p style="font-weight:bolder;">{{ $cv->warrenty_period }}
                                                شهور</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-lg-12" style="border:none;font-size:large">
                            <div class="card-header"
                                style="background-color:#5B79AF;text-align:center;border-radius:20px;margin-top:20px;padding:0px;color:white;font-weight:bold;">
                                <p style="padding:0px;margin:0px;color:white">تفاصيل الخبرة</p>
                            </div>
                            <div class="card-body" style="font-size:large;text-align:center">
                                @if ($cv->experinces)
                                    <table class="table" style="font-size:large">
                                        <thead>
                                            <tr>
                                                <th>البلد</th>
                                                <th>المدة</th>
                                                <th>الوظيفة</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <th>{{ $cv->experinces?->country?->title }}</th>
                                                <th>{{ $cv->experinces?->exp_period }}</th>
                                                <th>{{ $cv->experinces?->job?->title }}</th>
                                            </tr>


                                        </tbody>

                                    </table>
                                @else
                                    لا يوجد خبرة
                                @endif
                            </div>
                        </div>

                        <div class="card col-lg-12" style="border:none;font-size:large">
                            <div class="card-header"
                                style="background-color:#5B79AF;text-align:center;border-radius:20px;margin-top:20px;padding:0px;color:white;font-weight:bold;">
                                <p style="padding:0px;margin:0px;color:white">المهــارات</p>
                            </div>
                            <div class="card-body" style="font-size:large;text-align:center">
                                @forelse($cv->skills as $skill)
                                    <button class="btn btn-outline-secondary m-2">
                                        {{ $skill->title }}
                                    </button>
                                @empty
                                    <p class="text-center">
                                        لا توجد مهارات
                                    </p>
                                @endforelse
                            </div>
                        </div>

                        <div class="card col-lg-12" style="border:none;font-size:large">
                            <div class="card-header"
                                style="background-color:#5B79AF;text-align:center;border-radius:20px;margin-top:20px;padding:0px;color:white;font-weight:bold;">
                                <p style="padding:0px;margin:0px;color:white">تفاصيل جواز السفر</p>
                            </div>
                            <div class="card-body" style="font-size:large;text-align:right">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <table class="table" style="font-size:large">
                                            <tbody>
                                                <tr>
                                                    <th>رقم الجواز :</th>
                                                    <td class="text-bold">{{ $cv->passport_number }}</th>
                                                </tr>
                                                <tr>
                                                    <th>مكان الاصدار :</th>
                                                    <td class="text-bold">{{ $cv->passport_city_name?->title }}
                                                        </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-6">
                                        <table class="table" style="font-size:large">
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    $passport_created_at = explode(' ', $cv->passport_start);
                                                    $passport_start = $passport_created_at[0];
                                                    ?>
                                                    <th>تاريخ الاصدار :</th>

                                                    <td class="text-bold">{{ $passport_start }}</th>
                                                </tr>
                                                <tr>
                                                    <?php
                                                    $passport_end_at = explode(' ', $cv->passport_end);
                                                    $passport_end = $passport_end_at[0];
                                                    ?>
                                                    <th> تاريخ الانتهاء :</th>
                                                    <td class="text-bold">{{ $passport_end }}</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-12 text-center mb-4">
                                    <img src="{{ url('/') }}/frontend/images/logo/favW.png"
                                        style="width: auto; height:35px">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="card-body">
                        <div class="worker-content">
                            <a href="#!" data-bs-toggle="modal" data-bs-target=".cvModal"
                                @isset($type) attr-type="{{ $type }}" @endisset
                                attr-id="{{ $cv->id }}" class="twm-job-title">
                                <h4> {{ $cv->name }} </h4>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <p class="worker-address">{{ __('frontend.Nationality') }}
                                        : {{ $cv->nationalitie ? $cv->nationalitie->title : '' }} </p>
                                </li>
                                <li>
                                    <p class="worker-job"> {{ __('frontend.Occupation') }} :
                                        {{ $cv->job ? $cv->job->title : '' }} </p>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>
                                    <p class="worker-address"> {{ __('frontend.Religion') }} :
                                        {{ $cv->religion ? $cv->religion->title : '' }} </p>
                                </li>
                                @if ($type == 'transport')
                                    <li>
                                        <p class="worker-job">
                                            سعر نقل الخدمات:
                                            {{ $cv->transfer_price ?? '' }} {{ __('frontend.SAR') }}
                                        </p>
                                    </li>
                                @else
                                    <li>
                                        <p class="worker-job">
                                            {{ __('frontend.Recruitment price') }}:
                                            {{ $cv->nationalitie->recruitment_price }} {{ __('frontend.SAR') }}
                                        </p>
                                    </li>
                                @endif
                            </ul>
                            <ul class="list-unstyled">
                                <li>
                                    <p class="worker-address">
                                        {{ __('frontend.Practical experience') }} :
                                        @if ($cv->type_of_experience == 'new')
                                            {{ $cv->type_of_experience ? 'قادم جديد' : '--' }}
                                        @else
                                            {{ $cv->type_of_experience ? 'لديه خبرة سابقة' : '--' }}
                                        @endif

                                    </p>
                                </li>

                                <li>
                                    <p class="worker-job"> {{ __('frontend.age') }} : {{ $cv->age ?? '' }} سنة </p>
                                </li>

                            </ul>
                            @if ($type == 'transport')
                                <ul class="list-unstyled">
                                    <li>
                                        <p class="worker-address"> مدة العمل للكفيل السابق :
                                            {{ $cv->periodservices ?? '' }} </p>
                                    </li>

                                    <li>
                                        <p class="worker-job"> سبب النقل : {{ $cv->reasonservices ?? '' }} </p>
                                    </li>
                                </ul>
                            @endif



                        </div>

                    </div> --}}
                </div>

                <div class="cv-comp text-center" style="padding:20px;">
                    <a id="downloadPdfBtn2" class="btn btn-danger d-none">
                        تحميل السيفي
                    </a>

                    <a href="{{ route('frontend.show.worker', $cv->id) }}" class="btn btn-secondary">
                        احجز الان

                    </a>

                </div>
            </div>

        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
        integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />


    <script>
        Fancybox.bind("[data-fancybox]", {
            contentClick: "iterateZoom",
            Images: {
                Panzoom: {
                    maxScale: 4,
                },
            },
        });

        document.getElementById('downloadPdfBtn').addEventListener('click', function() {
            var element = document.getElementById('pdf-content');
            html2canvas(element).then(function(canvas) {

                var imgData = canvas.toDataURL('image/png');
                var pdf = new jsPDF('p', 'mm', [297, 210]);

                var pdfWidth = -190;
                var pdfHeight = (canvas.height * pdfWidth) / canvas.width;
                pdf.addImage(imgData, 'PNG', 5, 15, pdfWidth, pdfHeight);
                pdf.save('mawtenrec.sa-{{ $cv->name }}.pdf');
            });
        });


        document.getElementById('downloadPdfBtn2').addEventListener('click', function() {
            var element = document.getElementById('pdf-content');

            html2canvas(element).then(function(canvas) {
                var imgData = canvas.toDataURL('image/png');
                var pdf = new jsPDF({
                    hotfixes: ["px_scaling"],
                });

                var pdfWidth = 100;
                var pdfHeight = (canvas.height * pdfWidth) / canvas.width;

                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('{{ $cv->name }}.pdf');
            });
        });
    </script>
@endsection
