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
    {{ $value == 'rental' ? 'إضافة سيرة ذاتية جديدة للايجار' : 'إضافة سيرة ذاتية جديدة' }}
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">إضافة سيرة ذاتية جديدة</h4>
                    <form id="Form" method="post" action="{{ route('biographies.store', $value) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="vertical-wizard">

                            <section>
                                <div class="row">
                                    <div class="col-lg-12 d-none"style="padding:30px; display:none">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="mySwitch"
                                                name="display_or_hide" value="1">
                                            <label class="form-check-label" for="mySwitch">إظهار السيرة الذاتية؟</label>
                                            <input type="hidden" name="display_or_hide" value="1">
                                            <!-- Hidden input field for the unchecked state -->
                                        </div>
                                    </div>

                                    <div class="col-12 p-2">
                                        <div class="form-group">
                                            <label for="profile_picture"> ارفق السيرة الذاتية </label>
                                            <input type="file" data-validation="required" class="form-control "
                                                id="cv_file" name="cv_file" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="user">رقم جواز السفر</label>
                                            <input data-validation="required" required type="text" class="form-control"
                                                value="" id="passport_number" name="passport_number" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="user">اسم الشخص</label>
                                            <input data-validation="required" required type="text" class="form-control"
                                                value="" id="user" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">الجنسية </label>
                                            <select name="nationalitie_id" class="form-control nationality select2Users">
                                                @foreach ($nationalitie as $one)
                                                    <option value="{{ $one->id }}">{{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">المهنة </label>
                                            <select name="job_id" class="form-control select2Users">
                                                @foreach ($job as $one)
                                                    <option value="{{ $one->id }}">{{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">ديانة العامل </label>
                                            <select id="religion_id" name="religion_id" class="form-control select2Users">
                                                @foreach ($religion as $one)
                                                    <option value="{{ $one->id }}">{{ $one->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="age">العمر </label>
                                            <input type="number" class="form-control" value="" id="age"
                                                name="age" placeholder="العمر">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="recruitment_price">سعر الاستقدام </label>
                                            <input type="number" class="form-control" value="" id="recruitment_price"
                                                name="recruitment_price" placeholder=" ">

                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="salary">الراتب</label>
                                            <input data-validation="required" required type="number" class="form-control"
                                                value="" id="salary" name="salary" placeholder=" ">

                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">الخبرة السابقة</label>
                                            <select name="type_of_experience" class="form-control select2Users">
                                                <option value="new">قادم جديد</option>
                                                <option value="with_experience">لديه خبرة سابقة</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="submit_button"
                                            style="border: none !important;background-color: #556ee6;border-radius: 4px;padding: 8px 15px;color: #fff;"
                                            type="submit" value="حفظ" />
                                    </div>
                                </div>
                            </section>
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

        // $(".dropify").dropify()

        // $('.input-images-1').imageUploader({
        //   'imagesInputName': "images",
        //});


        $(document).ready(function() {

            var id = $('.nationality').val();
            var religion_id = $("#religion_id").val();
            $.get("{{ url('/admin/country-price') }}/" + id + "/" + religion_id, function(response) {
                $('#recruitment_price').val(response);
            });
        });

        $(".nationality").change(function() {
            var id = $(this).val();
            var religion_id = $("#religion_id").val();
            $.get("{{ url('/admin/country-price') }}/" + id + "/" + religion_id, function(response) {
                $('#recruitment_price').val(response);
            });

        });

        $(document).on('change', '#religion_id', function() {
            var id = $(".nationality").val();
            var religion_id = $(this).val();
            $.get("{{ url('/admin/country-price') }}/" + id + "/" + religion_id, function(response) {
                $('#recruitment_price').val(response);
            });
        });

        $(document).on('submit', 'form#Form', function(e) {
            e.preventDefault();


            var myForm = $("#Form")[0]
            var formData = new FormData(myForm)
            var url = $('#Form').attr('action');
            $('.loader-ajax').show()

            console.log(formData)
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                dataType: 'json',
                beforeSend: function() {
                    $('#submit_button').attr('disabled', true)

                },
                complete: function() {

                },
                success: function(data) {

                    console.log(data)
                    window.setTimeout(function() {

                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "تمت العملية بنجاح",
                            timer: 3000
                        })
                        window.location.href = '{{ route('biographies.index', $value) }}';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mySwitch').on('change', function() {
                // Check if the checkbox is checked or not
                var isChecked = $(this).is(':checked');

                // Set the value of the hidden input field based on the checkbox state
                $('input[name="display_or_hide"]').val(isChecked ? 1 : 0);
            });
        });
    </script>
@endsection
