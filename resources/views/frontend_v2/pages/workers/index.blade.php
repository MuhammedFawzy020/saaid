@extends('frontend_v2.layout.app')
@section('title')
    طلب استقدام
@endsection

@section('keywords')
    <meta name="keywords"
        content="عاملات منزلية,استقدام,عمالة منزلية,سائق,سائقين,مساند,مكتب استقدام,استقدام سائق خاص,استقدام عماله منزليه,مكتب استقدام الرياض,مكتب استقدام جدة,مكتب استقدام عماله منزلية,مكتب استقدام سائق,خدمات الاستقدام,روافد للاستقدام,مواقع مكاتب الاستقدام,مساند مكاتب استقدام,مساند للاستقدام,استقدام عاملة منزلية,استقدام الرياض,منصة مساند,ارخص مكتب استقدام,افضل مكتب استقدام,تقديم شغالات,استقدام عامل منزلي,اقرب مكتب استقدام من موقعي,اسعار تقديم الخادمات,شروط استقدام سائق خاص,شروط استقدام عامل منزلي,شروط الاستقدام,مكاتب الاستقدام المعتمدة,مكاتب الاستقدام المعتمدة من وزارة العمل,مكتب استقدام سائق خاص,مكاتب استقدام من الفلبين بالرياض,اسعار استقدام العاملات المنزلية,أفضل مكتب استقدام في الرياض,مكتب استقدام شمال الرياض,استقدام خادمة سيرلانكية,مكتب استقدام كينيا الرياض,مكاتب استقدام فلبينيات بالرياض">
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

@section('content')
    <div class="">
        <div class="row m-0 p-0 mb-4 p-4 text-center">
            {{-- need background image like home page ;) --}}
            <h1 class="display-3 mt-3 ">
                إبحث عن طلبك
            </h1>
            <figure class="p-2 mb-3">
                <blockquote class="blockquote">
                    <p></p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    أفضل شركة استقدام العمالة المنزلية بمعايير دولية ومهنية عالية
                </figcaption>
            </figure>
        </div>



        <form method="get"
            action="{{ $value == 'rental' ? route('all-workers', ['value' => 'rental', 'type' => 'admission']) : route('all-workers') }}">
            @csrf
            <div class="row m-0 p-0 mb-4 mt-4 backgound-color-orange p-4">
                <div class="col-12 text-center mb-2 ">
                    <h3 class="color-white">
                        <b class="color-white">
                            بحث متقدم
                        </b>
                    </h3>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label class="color-white">
                            الجنسية
                        </label>
                        <select class="form-select" name="nationality">
                            <option value="">
                                جميع الجنسيات
                            </option>
                            @foreach ($nationalities as $key => $nationality)
                                <option value="{{ $nationality->id }}"
                                    {{ request()->get('nationality') == $nationality->id ? 'selected' : '' }}>
                                    {{ $nationality->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label class="color-white">
                            العمر المطلوب
                        </label>
                        <select class="form-select" name="age">
                            <option value="">
                                جميع الاعمار
                            </option>
                            @foreach ($ages as $age)
                                <option value="{{ $age->id }}"
                                    {{ request()->get('age') == $age->id ? 'selected' : '' }}>
                                    من {{ $age->from }} سنة إلي {{ $age->to }} سنة
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label class="color-white">
                            المهنة المطلوبة
                        </label>
                        <select class="form-select" name="job">
                            <option value="">
                                جميع المهن
                            </option>
                            @foreach ($jobs as $job)
                                <option value="{{ $job->id }}"
                                    {{ request()->get('job') == $job->id ? 'selected' : '' }}>
                                    {{ $job->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label class="color-white">
                            الديانة
                        </label>
                        <select class="form-select" name="religion">
                            <option value="">
                                جميع الديانات
                            </option>
                            <option value="1" {{ request()->get('religion') == 1 ? 'selected' : '' }}>
                                مسلم / ة
                            </option>
                            <option value="2" {{ request()->get('religion') == 2 ? 'selected' : '' }}>
                                غير مسلم / ة
                            </option>

                        </select>
                    </div>
                </div>
                <div class="col-12 text-center mt-2 mb-2 ">
                    <button type="submit" class="btn btn-light">
                        إبحث
                    </button>
                    <a href="{{ route('all-workers') }}" class="btn btn-outline-light">
                        إعادة تهيئة البحث
                    </a>
                </div>
            </div>
        </form>

        <div class="row m-0 p-0">

            @foreach ($cvs as $cv)
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                @if ($cv->cv_file)
                                    <a href="{{ url('frontend/images/users/' . $cv->cv_file) }}" data-fancybox
                                        data-caption="{{ $cv->name }}">
                                        <img src="{{ url('frontend/images/users/' . $cv->cv_file) }}" class="card-img" style="width:auto" />
                                    </a>
                                @else
                                    <img src="{{ url('/') }}/frontend/images/comment-1-1.jpg" class="card-img" style="width:auto" 
                                        alt="">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        @if ($cv->name)
                                            {{ $cv->name }}
                                        @else
                                            لا يوجد اسم
                                        @endif
                                    </h5>
                                    @if ($value != 'rental')
                                        <p class="card-text" style="padding-bottom:20px;"><small class="text-danger"
                                                style="font-size:10px">لا يتم دفع أي رسوم إلا من خلال مساند</small></p>
                                    @endif
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="worker-address">{{ __('frontend.Nationality') }}
                                                : <b>{{ $cv->nationalitie ? $cv->nationalitie->title : '' }} </b></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="worker-address"> {{ __('frontend.Occupation') }} :
                                                <b>{{ $cv->job ? $cv->job->title : '' }}</b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="worker-address"> {{ __('frontend.Religion') }} :
                                                <b>{{ $cv->religion ? $cv->religion->title : '' }}</b>
                                            </p>
                                        </div>
                                        @if ($type == 'transport')
                                            <div class="col-6">
                                                <p class="worker-address">
                                                    سعر نقل الخدمات:
                                                    <b> {{ $cv->transfer_price ?? '' }} {{ __('frontend.SAR') }} </b>
                                                </p>
                                            </div>
                                        @else
                                            <div class="col-6">
                                                <p class="worker-address">


                                                    @if ($value == 'rental')
                                                        {{ __('frontend.Rent Price') }}
                                                    @else
                                                        {{ __('frontend.Recruitment price') }}
                                                    @endif

                                                    :
                                                    <b>
                                                        @if ($cv->religion_id == 1 && $cv->is_rental == 1)
                                                            {{ $cv->nationalitie->price->rent_muslim_price }}
                                                            {{ __('frontend.SAR') }}
                                                        @elseif($cv->religion_id != 1 && $cv->is_rental == 1)
                                                            {{ $cv->nationalitie->price->rent_none_muslim_price }}
                                                            {{ __('frontend.SAR') }}
                                                        @elseif($cv->religion_id == 1 && $cv->is_rental == 0)
                                                            {{ $cv->nationalitie->price->price }} {{ __('frontend.SAR') }}
                                                        @else
                                                            {{ $cv->nationalitie->price->none_muslim }}
                                                            {{ __('frontend.SAR') }}
                                                        @endif
                                                    </b>
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="worker-address">
                                                {{ __('frontend.Practical experience') }} :
                                                @if ($cv->type_of_experience == 'new')
                                                    <b>{{ $cv->type_of_experience ? 'قادم جديد' : '--' }}</b>
                                                @else
                                                    <b>{{ $cv->type_of_experience ? 'لديه خبرة سابقة' : '--' }}</b>
                                                @endif

                                            </p>
                                        </div>

                                        <div class="col-6">
                                            <p class="worker-address"> {{ __('frontend.age') }} :<b> {{ $cv->age ?? '' }}
                                                    سنة</b>
                                            </p>
                                        </div>

                                        <div class="col-6">
                                            <p class="worker-address"> {{ __('frontend.Salary') }} :
                                                <b>{{ $cv->salary }} {{ __('frontend.SAR') }}</b>
                                            </p>
                                        </div>

                                    </div>
                                    @if ($type == 'transport')
                                        <ul class="list-unstyled">
                                            <li>
                                                <p class="worker-address"> مدة العمل للكفيل السابق :
                                                    {{ $cv->periodservices ?? '' }} </p>
                                            </li>

                                            <li>
                                                <p class="worker-address"> سبب النقل : {{ $cv->reasonservices ?? '' }} </p>
                                            </li>
                                        </ul>
                                    @endif

                                    <div class="row">
                                        <div class="cv-comp text-center">
                                            <!-- <a href="{{ route('worker-details', $cv->id) }}"
                                                                                                                                                                class="worker btn cvDetails btn btn-outline-secondary">

                                                                                                                                                                التفاصيل

                                                                                                                                                            </a>
                                                                                                                                                            <a href="{{ route('frontend.show.worker', $cv->id) }}" class="btn btn-secondary">
                                                                                                                                                                احجز الان

                                                                                                                                                            </a> -->

                                            <a id="downloadPdfBtn2" class="btn btn-danger d-none">
                                                تحميل السيفي
                                            </a>
                                            <a href="{{ route('frontend.show.worker', $cv->id) }}"
                                                class="btn btn-secondary">
                                                احجز الان
                                            </a>
                                            @if ($cv->pdf)
                                                <a href="{{ url('/') }}/{{ $cv->pdf }}" target="_blank"
                                                    class="btn book">
                                                    عرض السيرة الذاتية (PDF)
                                                </a>
                                            @endif

                                            @if ($cv->vedio)
                                                <a href="{{ url('/') }}/{{ $cv->vedio }}" target="_blank"
                                                    class="btn book">
                                                    عرض الفيديو
                                                </a>
                                            @endif

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $cv->id }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card" style="padding:3px;">
                                    <!-- <div class="card-image">
                                                                                                                                                                                                                                                                                                                            <img src="{{ get_file($cv->cv_file) }}" alt="">
                                                                                                                                                                                                                                                                                                                        </div> -->

                                    <div class="card-header" style="padding:0px !important;border:none !important;">
                                        <div class="card col-lg-12" style="border:none;">
                                            <div class="card-header "
                                                style="border:1px solid #5B79AF;border-radius:20px;">
                                                <div class="row">
                                                    <div class="personal-image col-2" style="padding:0px;">
                                                        @if ($cv->cv_file)
                                                            <img src="{{ url('frontend/images/users/' . $cv->cv_file) }}"
                                                                style="width:auto;height:135px " alt="">
                                                        @else
                                                            <img src="{{ url('/') }}/frontend/images/comment-1-1.jpg"
                                                                style="width:auto;height:135px " alt="">
                                                        @endif
                                                    </div>
                                                    <div class="personal-info col-7">
                                                        <p class="name"
                                                            style="padding:0px;margin:0px;text-align:right;font-size:15px;font-weight:bold;">
                                                            @if ($cv->name)
                                                                {{ $cv->name }}
                                                            @else
                                                                لا يوجد اسم
                                                            @endif
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-4" style="padding:0px;font-size:7px;">
                                                                المهنة :
                                                                <small>{{ $cv->job?->title }}</small>
                                                            </div>
                                                            <div class="col-4" style="padding:0px;font-size:7px;">
                                                                الراتب الشهري :
                                                                <small>{{ $cv->salary }} ريال</small>
                                                            </div>
                                                            <div class="col-4" style="padding:0px;font-size:7px;">مده
                                                                التعاقد :
                                                                <small>{{ $cv->contract_period }}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gawhra-logo col-3">
                                                        <img src="{{ url('/') }}/frontend/images/logo/logoH.svg"
                                                            style="width:auto;height:45px" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card col-lg-12" style="border:none;font-size:xx-small">
                                            <div class="card-header"
                                                style="background-color:#5B79AF;text-align:center;border-radius:20px;margin-top:20px;padding:0px;color:white;font-weight:bold;">
                                                <p style="padding:0px;margin:0px;color:white;">البيانات الشخصية</p>
                                            </div>
                                            <div class="card-body" style="font-size:xx-small;text-align:right">
                                                <div class="row">
                                                    <div class="col-3"
                                                        style="border-left:2px solid #5B79AF;padding-right:10px;">
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">الجنسية : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->nationalitie?->title }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">الحالة الاجتماعية : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->social_type?->title }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">الديانة : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->religion?->title }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">التعليم : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->education }}</small>
                                                        </div>

                                                    </div>
                                                    <div class="col-3"
                                                        style="border-left:2px solid #5B79AF;padding-right:10px;">
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">الوزن : </p>
                                                            <small style="font-weight:bolder;">{{ $cv->weight }}</small>
                                                        </div>

                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">العمر : </p>
                                                            <small style="font-weight:bolder;">{{ $cv->age }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">عدد الاطفال : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->no_of_childrens }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">الطول : </p>
                                                            <small style="font-weight:bolder;">{{ $cv->height }}</small>
                                                        </div>

                                                    </div>
                                                    <div class="col-3"
                                                        style="border-left:2px solid #5B79AF;padding-right:10px;">
                                                        <div class="row" style="margin-bottom:20px;">

                                                            <p style="margin:0px;">تاريخ الميلاد : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->birthdate }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">مكان الميلاد : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->birth_country }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">رقم التواصل : </p>
                                                            <small style="font-weight:bolder;">{{ $cv->phone_no }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">اللغة الأم : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->language_title?->title }}</small>
                                                        </div>

                                                    </div>
                                                    <div class="col-3" style="padding-right:10px;">
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">سعر الستقدام : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->recruitment_price }}
                                                                ريال</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">الراتب : </p>
                                                            <small style="font-weight:bolder;">{{ $cv->salary }}
                                                                ريال</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">الخبرة السابفة : </p>
                                                            <small
                                                                style="font-weight:bolder;">{{ $cv->type_of_experience }}</small>
                                                        </div>
                                                        <div class="row" style="margin-bottom:20px;">
                                                            <p style="margin:0px;">مدة الضمان : </p>
                                                            <small style="font-weight:bolder;">{{ $cv->warrenty_period }}
                                                                شهور</small>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card col-lg-12" style="border:none;font-size:xx-small">
                                            <div class="card-header"
                                                style="background-color:#5B79AF;text-align:center;border-radius:20px;margin-top:20px;padding:0px;color:white;font-weight:bold;">
                                                <p style="padding:0px;margin:0px;color:white">تفاصيل الخبرة</p>
                                            </div>
                                            <div class="card-body" style="font-size:xx-small;text-align:center">
                                                @if ($cv->experinces)
                                                    <table class="table" style="font-size:xx-small">
                                                        <thead>
                                                            <tr>
                                                                <th>البلد</th>
                                                                <th>المدة</th>
                                                                <th>الوظيفة</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>


                                                            <tr>
                                                                <th>{{ $cv->experinces?->title }}</th>
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

                                        <div class="card col-lg-12" style="border:none;font-size:xx-small">
                                            <div class="card-header"
                                                style="background-color:#5B79AF;text-align:center;border-radius:20px;margin-top:20px;padding:0px;color:white;font-weight:bold;">
                                                <p style="padding:0px;margin:0px;color:white">تفاصيل جواز السفر</p>
                                            </div>
                                            <div class="card-body" style="font-size:xx-small;text-align:right">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <table class="table" style="font-size:xx-small">
                                                            <tbody>
                                                                <tr>
                                                                    <th>رقم الجواز :</th>
                                                                    <td class="text-bold">{{ $cv->passport_number }}
                                                                        </th>
                                                                </tr>
                                                                <tr>
                                                                    <th>مكان الاصدار :</th>
                                                                    <td class="text-bold">
                                                                        {{ $cv->passport_city_name?->title }}</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <table class="table" style="font-size:xx-small">
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
                                                <div class="col-4">
                                                    <!-- <img src="{{ url('/') }}/frontend/images/Symbology-QR-code.svg"
                                                                                                                                                                                                                                                                                                                                            style="width:100%;height:50px" alt=""> -->
                                                </div>
                                                <div class="col-4">
                                                    <img src="{{ url('/') }}/frontend/images/logo/logoH.svg"
                                                        alt="">
                                                </div>
                                                <div class="col-4">
                                                    <!-- <img src="{{ url('/') }}/frontend/images/Symbology-QR-code.svg"
                                                                                                                                                                                                                                                                                                                                            style="width:100%;height:50px" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
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
                                                    <p class="worker-address"> {{ __('frontend.Occupation') }} :
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
                                                        <p class="worker-address">
                                                            سعر نقل الخدمات:
                                                            {{ $cv->transfer_price ?? '' }} {{ __('frontend.SAR') }}
                                                        </p>
                                                    </li>
                                                @else
                                                    <li>
                                                        <p class="worker-address">
                                                            @if ($value == 'rental')
                                                                سعر الايجار
                                                            @else
                                                                {{ __('frontend.Recruitment price') }}
                                                            @endif:
                                                            {{ $cv->nationalitie->recruitment_price }}
                                                            {{ __('frontend.SAR') }}
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
                                                    <p class="worker-address"> {{ __('frontend.age') }} :
                                                        {{ $cv->age ?? '' }} سنة </p>
                                                </li>

                                            </ul>
                                            @if ($type == 'transport')
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <p class="worker-address"> مدة العمل للكفيل السابق :
                                                            {{ $cv->periodservices ?? '' }} </p>
                                                    </li>

                                                    <li>
                                                        <p class="worker-address"> سبب النقل :
                                                            {{ $cv->reasonservices ?? '' }} </p>
                                                    </li>
                                                </ul>
                                            @endif



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                <a href="{{ route('frontend.show.worker', $cv->id) }}" class="btn btn-primary">إحجز
                                    الان</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-3"></div>
            <div class="col-6 mt-4 mb-4 ">
                <div class="paginatation-container">
                    {{ $cvs->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            const preloader = document.querySelector(".preloader");
            preloader.style.display = "none";
        };
    </script>

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
    </script>
@endsection
