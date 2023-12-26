@extends('admin.layouts.layout')
@section('styles')
    <link href="{{ asset('dashboard/backEndFiles/uploadMultiImages/image-uploader.min.css') }}" rel="stylesheet"
        type="text/css">

    @include('admin.layouts.noContent.noContentCss')
    <style>
        select option[disabled] {
            display: none;
        }

        .fa {
            margin-left: -30px;
            cursor: pointer;
        }
    </style>
    <style>
        .dropify-font-upload:before,
        .dropify-wrapper .dropify-message span.file-icon:before {
            content: "\f382";
            font-weight: 100;
            color: #000;
            font-size: 26px;
        }

        .dropify-wrapper .dropify-message p {
            text-align: center;
            font-size: 15px;
        }
    </style>

    <style>
        .modal-fullscreen .modal-body {
            overflow-y: unset !important;
        }

        .dropify-wrapper {
            padding: 0;
        }

        .dropify-wrapper .dropify-message {
            position: absolute;
            top: 50%;
            right: 50%;
            transform: translateY(-50%) translateX(50%);
        }
    </style>
@endsection

@section('page-title')
    تعديل السيرة الذاتية
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">تعديل السيرة الذاتية</h4>
                    <form id="Form" method="post" action="{{ route('biographies.update', $biography->id) }}">
                        @csrf
                        @method('PUT')
                        <div id="vertical-example" class="vertical-wizard">

                            <!-- Seller Details -->
                            <!-- <h3>البيانات الرئيسية </h3>
                            <section>

                                <div class="row">
                                    <div class="col-12 p-2">
                                        <div class="form-group">
                                            <input type="checkbox" {{ $biography->display == 1 ? 'checked' : '' }}
                                                value="0" id="display" name="display">
                                            <label for="display">إخفاء المعلومات داخل السايت</label>

                                        </div>
                                    </div>
                                    <div class="col-12 p-2">
                                       
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="recruitment_office_id"> مكاتب السيرة الذاتيه </label>
                                            <select data-validation="required" required name="recruitment_office_id"
                                                id="recruitment_office_id" class="form-control">
                                                @foreach ($recruitment_office as $one)
                                                    <option value="{{ $one->id }}"
                                                        {{ $biography->recruitment_office_id == $one->id ? 'selected' : ' ' }}>
                                                        {{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">رقم جواز السفر </label>
                                            <input data-validation="required" required type="text" class="form-control"
                                                value="{{ $biography->passport_number }}" id="passport_number"
                                                name="passport_number" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="passport_start">تاريخ إصدار جواز السفر </label>
                                            <input type="date" class="form-control"
                                                value="{{ Date('Y-m-d', strtotime($biography->passport_start)) }}"
                                                id="passport_start" name="passport_start" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="passport_end">تاريخ إنتهاء جواز السفر </label>
                                            <input type="date" class="form-control"
                                                value="{{ $biography->passport_end }}" id="passport_end"
                                                name="passport_end" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_city">مكان إصدار جواز السفر </label>
                                            <select name="passport_city" class="form-control select2Users">
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}"
                                                        {{ $biography->passport_city == $city->id ? 'selected' : '' }}>
                                                        {{ $city->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">المهارات </label>
                                            <select multiple name="skills[]" class="form-control select2Users">
                                                @foreach ($skills as $skill)
                                                    <option value="{{ $skill->id }}"
                                                        @foreach ($biography->skills as $sk) @if ($sk->id == $skill->id) selected @endif @endforeach>
                                                        {{ $skill->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                </div>


                            </section> -->
                            <!-- Company Document -->
                            <h3>البيانات الشخصية</h3>
                            <section>

                                <div class="row">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="profile_picture"> ارفق صور الشخصية </label>
                                                <input type="file" class="form-control " id="profile_picture"
                                                    name="cv_file" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ url('frontend/images/users/' . $biography->cv_file) }}"
                                                style="width:100%;height:100px" alt="">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="user">اسم الشخص</label>
                                            <input data-validation="required" value="{{ $biography->name }}" required
                                                type="text" class="form-control" value="" id="user"
                                                name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">الجنسية </label>
                                            <select name="nationalitie_id" class="form-control nationality select2Users">
                                                @foreach ($nationalitie as $one)
                                                    <option value="{{ $one->id }}"
                                                        {{ $biography->nationalitie_id == $one->id ? 'selected' : '' }}>
                                                        {{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">المهنة </label>
                                            <select name="job_id" class="form-control select2Users">
                                                @foreach ($job as $one)
                                                    <option value="{{ $one->id }}"
                                                        {{ $biography->job_id == $one->id ? 'selected' : '' }}>
                                                        {{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number"> الحالة الاجتماعية</label>
                                            <select name="social_type_id" class="form-control select2Users">
                                                @foreach ($social_type as $one)
                                                    <option value="{{ $one->id }}"
                                                        {{ $biography->social_type_id == $one->id ? 'selected' : '' }}>
                                                        {{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> -->

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">ديانة العامل </label>
                                            <select name="religion_id" class="form-control select2Users">
                                                @foreach ($religion as $one)
                                                    <option value="{{ $one->id }}"
                                                        {{ $biography->religion_id == $one->id ? 'selected' : '' }}>
                                                        {{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="education">التعليم</label>
                                            <select id="cvTypeSelect" name="education" class="form-control select2Users">
                                                <option value="-"
                                                    {{ $biography->education == '-' ? 'selected' : '' }}>دون تعليم</option>
                                                <option value="مرحلة ابتدائية"
                                                    {{ $biography->education == 'مرحلة ابتدائية' ? 'selected' : '' }}>مرحلة
                                                    ابتدائية</option>
                                                <option value="تعليم متوسط"
                                                    {{ $biography->education == 'تعليم متوسط' ? 'selected' : '' }}>تعليم
                                                    متوسط</option>
                                                <option value="حاصل علي بكالوريوس"
                                                    {{ $biography->education == 'حاصل علي بكالوريوس' ? 'selected' : '' }}>
                                                    حاصل علي بكالوريوس</option>
                                                <option value="حاصل علي دكتوراه"
                                                    {{ $biography->education == 'حاصل علي دكتوراه' ? 'selected' : '' }}>
                                                    حاصل علي دكتوراه</option>
                                            </select>
                                        </div>
                                    </div> -->

                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="reasonservices">الوزن</label>
                                            <input data-validation="optional" type="text" class="form-control"
                                                value="{{ $biography->weight }}" id="reasonservices" name="weight"
                                                placeholder="">
                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="reasonservices">الطول</label>
                                            <input data-validation="optional" type="text" class="form-control"
                                                value="{{ $biography->height }}" id="reasonservices" name="height"
                                                placeholder="">
                                        </div>

                                    </div> -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="age">العمر </label>
                                            <input type="number" data-validation="required" required
                                                class="form-control" value="{{ $biography->age }}" id="age"
                                                name="age" placeholder="العمر">
                                        </div>
                                    </div>

                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="age">عدد الطفال </label>
                                            <input type="number" class="form-control"
                                                value="{{ $biography->no_of_childrens }}" id="no_of_childrens"
                                                name="no_of_childrens" placeholder="عدد الاطفال">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="birthdate">تاريخ الميلاد</label>

                                            <input type="date" class="form-control"
                                                value="{{ $biography->birthdate }}" id="birthdate" name="birthdate"
                                                placeholder="تاريخ الميلاد">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="birth_country">مكان الميلاد</label>
                                            <input placeholder="مكان الميلاد" value="{{ $biography->birth_country }}"
                                                type="text" name="birth_country" class="form-control"
                                                id="birth_country" />
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="phone_no">رقم التواصل</label>
                                            <input type="text" class="form-control"
                                                value="{{ $biography->phone_no }}" id="phone_no" name="phone_no"
                                                placeholder="رقم التواصل">
                                        </div>
                                    </div> -->

                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">اللغة التى يتحدث بها العامل</label>
                                            <select name="language_title_id" class="form-control select2Users">
                                                @foreach ($language_title as $one)
                                                    <option value="{{ $one->id }}"
                                                        {{ $biography->language_title_id == $one->id ? 'selected' : '' }}>
                                                        {{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> -->


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="recruitment_price">سعر الاستقدام </label>
                                            <input data-validation="optional" type="number" class="form-control"
                                                value="{{ $biography->recruitment_price }}" id="recruitment_price"
                                                name="recruitment_price" placeholder=" ">

                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="salary">الراتب</label>
                                            <input data-validation="optional" type="number" class="form-control"
                                                value="{{ $biography->salary }}" id="salary" name="salary"
                                                placeholder=" ">

                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">الخبرة السابقة</label>
                                            <select name="type_of_experience" class="form-control select2Users">
                                                <option value="new"
                                                    {{ $biography->type_of_experience == 'new' ? 'selected' : '' }}>قادم
                                                    جديد</option>
                                                <option value="with_experience"
                                                    {{ $biography->type_of_experience == 'with_experience' ? 'selected' : '' }}>
                                                    لديه خبرة سابقة</option>
                                            </select>
                                        </div>
                                    </div>


                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="warrenty_period">مدة الضمان</label>
                                            <input data-validation="optional" type="text" class="form-control" value="{{ $biography->warrenty_period }}" id="warrenty_period"
                                                name="warrenty_period" placeholder=" ">

                                        </div>

                                    </div> -->



                                </div>
                            </section>
                            <!-- <h3>الخبرة السابقة</h3>
                            <section>

                                <div class="row-template">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="exp_job_id">المهنة </label>
                                            <select name="exp_job_id" class="form-control select2Users">
                                                <option value=" ">لا يوجد خبرة سابقة</option>
                                                @foreach ($job as $one)
                                                    <option value="{{ $one->id }}"
                                                        {{ $biography->experinces?->exp_job_id == $one->id ? 'selected' : '' }}>
                                                        {{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="city_id">البلد</label>
                                            <select name="exp_city_id" class="form-control select2Users">
                                                <option value=" ">لا يوجد خبرة سابقة</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}"
                                                        {{ $biography->experinces?->city_id == $city->id ? 'selected' : '' }}>
                                                        {{ $city->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <div id="" class="">
                                                <label for="exp_period">المدة</label>
                                                <input data-validation="optional" type="text" class="form-control"
                                                    value="{{ $biography->experinces?->exp_period }}" id="exp_period"
                                                    name="exp_period" placeholder=" ">

                                            </div>
                                        </div>
                                    </div>




                                </div>


                            </section> -->
                            <!-- Company Document -->
                            <!-- <h3>تفاصيل اكثر </h3>
                            <section>

                                <div class="row">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">

                                            <label for="contract_period">مدة التعاقد</label>
                                            <input data-validation="optional" type="text" class="form-control"
                                                value="{{ $biography->contract_period }}" id="contract_period"
                                                name="contract_period" placeholder=" ">

                                        </div>

                                    </div>






                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="passport_number">نوع السيرة الذاتية</label>
                                            <select id="cvTypeSelect" data-validation="required" required name="type"
                                                class="form-control select2Users">
                                                <option value="admission"
                                                    {{ $biography->type == 'admission' ? 'selected' : '' }}>استقدام
                                                </option>
                                                <option value="transport"
                                                    {{ $biography->type == 'transport' ? 'selected' : '' }}>نقل خدمات
                                                </option>

                                            </select>
                                        </div>
                                    </div>






                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <div id="showtransporttwo" class="transferReason">
                                                <label for="reasonservices">سبب التنازل </label>
                                                <input data-validation="optional" type="text" class="form-control"
                                                    value="{{ $biography->reasonservices }}" id="reasonservices"
                                                    name="reasonservices" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <div id="showtransportone" class="transferReason">
                                                <label for="periodservices">مدة العمل عند الكفيل السابق</label>
                                                <input data-validation="optional" type="text" class="form-control"
                                                    value="{{ $biography->periodservices }}" id="periodservices"
                                                    name="periodservices" placeholder=" ">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <div id="showtransportthree" class="transferReason">
                                                <label for="transfer_price">سعر نقل الخدمات </label>
                                                <input data-validation="optional" type="number" class="form-control"
                                                    value="{{ $biography->transfer_price }}" id="transfer_price"
                                                    name="transfer_price" placeholder=" ">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section> -->
                            <!-- Seller Details -->

                        </div>

                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection

@section('js')
    <script src="{{ asset('dashboard') }}/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/localization/messages_ar.min.js"
        integrity="sha512-bGOftAqe7xfGxaWMsVQR187i+R9E0tXZIUL0idz1NKBBZIW78hoDtFY9gGLEGJFwHPjQSmPiHdm+80QParVi1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('dashboard/backEndFiles/uploadMultiImages/image-uploader.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("div.transferReason").hide();

            $('#cvTypeSelect').on('change', function() {
                var demovalue = $(this).val();
                $("div.transferReason").hide();
                $("#show" + demovalue + "one").show();
                $("#show" + demovalue + "two").show();
                $("#show" + demovalue + "three").show();
            });
        });
    </script>
    <script>
        var index = 1;
        // $(function(){
        //
        $("#vertical-example").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slide",
            stepsOrientation: "vertical",
            onStepChanging: function(event, currentIndex, newIndex) {



                $('#vertical-example').find('a[href="#finish"]').remove();

                if (currentIndex == 2 && $('#Form').valid()) {
                    var $input = $(
                        '<input id="submit_button" style="border: none !important;background-color: #556ee6;border-radius: 4px;padding: 8px 15px;color: #fff;" type="submit" value="حفظ" />'
                    );
                    $input.appendTo($('ul[aria-label=Pagination]'));
                } else {
                    $('ul[aria-label=Pagination] input[value="حفظ"]').remove();
                }

                if (newIndex == 0) {
                    $('ul[aria-label=Pagination] input[value="حفظ"]').remove();

                }
                if (newIndex == 1) {
                    $('ul[aria-label=Pagination] input[value="حفظ"]').remove();

                }
                if (newIndex == 2) {
                    $('ul[aria-label=Pagination] input[value="حفظ"]').remove();

                }
                $('#Form').validate().settings.ignore = ":disabled,:hidden";
                return $('#Form').valid();




            },
            onFinishing: function(event, currentIndex) {
                $('#Form').validate().settings.ignore = ":disabled,:hidden";
                return $('#Form').valid();

            },
            onFinished: function(event, currentIndex) {
                $('#Form').validate().settings.ignore = ":disabled,:hidden";
            },
            labels: {
                finish: "حفظ",
                next: "التالى",
                previous: "السابق",
            },

        })


        $("#select2,.select2Users").select2({
            placeholder: '',
            dropdownAutoWidth: 'true',
            width: '100%'
        });

        $(".dropify").dropify()

        var images = @json($images);
        $('.input-images-1').imageUploader({
            'imagesInputName': "images",
            preloaded: images,
            preloadedInputName: 'old'
        });


        $(".nationality").change(function() {
            var id = $(this).val();

            $.get("{{ url('/admin/country-price') }}/" + id, function(response) {
                $('#recruitment_price').val(response);
            });

        });

        $(document).on('submit', 'form#Form', function(e) {
            e.preventDefault();

            var myForm = $("#Form")[0]
            var formData = new FormData(myForm)
            var url = $('#Form').attr('action');
            $('.loader-ajax').show()

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function() {
                    $('#submit_button').attr('disabled', true)

                },
                complete: function() {

                },
                success: function(data) {

                    window.setTimeout(function() {

                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "تمت العملية بنجاح",
                            timer: 3000
                        })
                        window.location.href = '{{ route('biographies.index') }}';
                        $('.loader-ajax').hide()
                    }, 20);
                },
                error: function(data) {
                    $('.loader-ajax').hide()
                    $('#submit_button').html(`حفظ`)
                    $('#submit_button').attr('disabled', false)
                    if (data.status === 500) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "أنت لا تملك الصلاحية لفعل هذا",
                            timer: 3000
                        });
                    }
                    if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);

                        $.each(errors, function(key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function(key, value) {
                                    cuteToast({
                                        type: "error", // or 'info', 'error', 'warning'
                                        message: value,
                                        timer: 3000
                                    });

                                });

                            } else {

                            }
                        });
                    }
                }, //end error method

                cache: false,
                contentType: false,
                processData: false
            });

        });
    </script>
@endsection
