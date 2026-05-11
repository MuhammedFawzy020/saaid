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

        .existing-cv-details {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 12px;
            line-height: 1.9;
            font-size: 14px;
        }
    </style>
@endsection

@section('page-title')
    {{ $value == 'rental' ? 'إضافة سيرة ذاتية جديدة للايجار' : ($value === 'serviceMove' ? 'إضافة سيرة ذاتية جديدة لنقل الخدمات' : 'إضافة سيرة ذاتية جديدة') }}
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
                                    <div class="col-6 p-2">
                                        <div class="form-group">
                                            <label>PDF </label>
                                            <input type="file" data-validation="required" class="form-control"
                                                name="pdf" accept=".pdf" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-6 p-2">
                                        <div class="form-group">
                                            <label>Vedio</label>
                                            <input type="file" class="form-control" name="vedio" accept="video/*"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-6 p-2">
                                        <div class="form-group">
                                            <label>رابط الفيديو (اختياري)</label>
                                            <input type="url" class="form-control" name="video_url" id="video_url"
                                                placeholder="https://...">
                                        </div>
                                    </div>
                                    <div class="col-12 p-2">
                                        <iframe id="video_preview_iframe" class="w-100 d-none"
                                            style="height:320px;border:0;" allowfullscreen loading="lazy"></iframe>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="type">نوع السيرة</label>
                                            <select name="type" id="type" class="form-control select2Users">
                                                <option value="admission"
                                                    {{ ($selected_type ?? 'admission') === 'admission' ? 'selected' : '' }}>
                                                    استقدام</option>
                                                <option value="transport"
                                                    {{ ($selected_type ?? 'admission') === 'transport' ? 'selected' : '' }}>
                                                    نقل داخلي</option>
                                                <option value="serviceMove"
                                                    {{ ($selected_type ?? 'admission') === 'serviceMove' ? 'selected' : '' }}>
                                                    نقل خدمات</option>
                                            </select>
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
                                            <select id="religion_id" name="religion_id"
                                                class="form-control select2Users">
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
                                            <input type="number" class="form-control" value=""
                                                id="recruitment_price" name="recruitment_price" placeholder=" ">

                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="salary">الراتب</label>
                                            <input data-validation="required" required type="number"
                                                class="form-control" value="" id="salary" name="salary"
                                                placeholder=" ">

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
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">
                                            <label for="passport_number">مكتب الاستقدام</label>
                                            <select name="recruitment_office_id" class="form-control select2Users">
                                                @foreach ($recruitment_office as $office)
                                                    <option value="{{ $office->id }}">{{ $office->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                        <div class="form-group">

                                            <label for="salary">الملاحظات</label>
                                            <textarea type="text" class="form-control" value="" id="notes" name="notes"></textarea>

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

    <div class="modal fade" id="existingCvModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">تم العثور على سيرة بنفس رقم الجواز</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="existing_cv_details" class="existing-cv-details mb-3"></div>
                    <div class="form-group mb-0">
                        <label for="transfer_target_type">نقل السيرة إلى نوع</label>
                        <select id="transfer_target_type" class="form-control">
                            <option value="normal">عادي</option>
                            <option value="rent">إيجار</option>
                            <option value="serviceMove">نقل خدمات</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" id="confirm_transfer_btn" class="btn btn-primary">موافق</button>
                </div>
            </div>
        </div>
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
        const passportLookupUrl = "{{ route('biographies.findByPassport') }}";
        const transferTypeUrlTemplate = "{{ route('biographies.transferType', ['id' => '__BIO_ID__']) }}";
        const normalIndexUrl = "{{ route('biographies.index') }}";
        const rentIndexUrl = "{{ route('biographies.index', 'rental') }}";
        const serviceMoveIndexUrl = "{{ route('biographies.index', 'serviceMove') }}";

        let existingBiography = null;
        let transferCompleted = false;

        function getCategoryLabel(category) {
            if (category === 'rent') {
                return 'إيجار';
            }
            if (category === 'serviceMove') {
                return 'نقل خدمات';
            }
            return 'عادي';
        }

        function getInnerTypeLabel(type) {
            if (type === 'transport') {
                return 'نقل داخلي';
            }
            if (type === 'serviceMove') {
                return 'نقل خدمات';
            }
            return 'استقدام';
        }

        function getRedirectUrlByCategory(category) {
            if (category === 'rent') {
                return rentIndexUrl;
            }
            if (category === 'serviceMove') {
                return serviceMoveIndexUrl;
            }
            return normalIndexUrl;
        }

        function currentCreateCategory() {
            @if ($value === 'rental')
                return 'rent';
            @elseif ($value === 'serviceMove')
                return 'serviceMove';
            @else
                return 'normal';
            @endif
        }

        function renderExistingBiographyDetails(biography) {
            const detailsHtml = `
                <div><strong>الاسم:</strong> ${biography.name || '-'}</div>
                <div><strong>رقم الجواز:</strong> ${biography.passport_number || '-'}</div>
                <div><strong>النوع الحالي:</strong> ${getCategoryLabel(biography.cv_category)}</div>
                <div><strong>نوع السيرة:</strong> ${getInnerTypeLabel(biography.type)}</div>
                <div><strong>الحالة:</strong> ${biography.status || '-'}</div>
                <div><strong>الجنسية:</strong> ${biography.nationality || '-'}</div>
            `;
            $('#existing_cv_details').html(detailsHtml);
        }

        function checkPassportAndPrompt() {
            const passportNumber = ($('#passport_number').val() || '').trim();

            if (!passportNumber) {
                existingBiography = null;
                transferCompleted = false;
                return;
            }

            $.ajax({
                url: passportLookupUrl,
                type: 'GET',
                data: {
                    passport_number: passportNumber
                },
                success: function(response) {
                    if (!response.exists) {
                        existingBiography = null;
                        transferCompleted = false;
                        return;
                    }

                    existingBiography = response.biography;
                    transferCompleted = false;

                    renderExistingBiographyDetails(existingBiography);
                    $('#transfer_target_type').val(currentCreateCategory());
                    $('#existingCvModal').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#existingCvModal').modal('show');
                },
                error: function() {
                    existingBiography = null;
                    transferCompleted = false;
                }
            });
        }

        function lookupPassport(passportNumber, onSuccess, onFailure) {
            $.ajax({
                url: passportLookupUrl,
                type: 'GET',
                data: {
                    passport_number: passportNumber
                },
                success: function(response) {
                    if (typeof onSuccess === 'function') {
                        onSuccess(response);
                    }
                },
                error: function() {
                    if (typeof onFailure === 'function') {
                        onFailure();
                    }
                }
            });
        }

        function submitCreateFormRequest() {
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
        }

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

        $(document).on('blur', '#passport_number', function() {
            checkPassportAndPrompt();
        });

        $(document).on('input', '#passport_number', function() {
            existingBiography = null;
            transferCompleted = false;
        });

        $(document).on('click', '#confirm_transfer_btn', function() {
            if (!existingBiography || !existingBiography.id) {
                return;
            }

            const targetType = $('#transfer_target_type').val();

            $.ajax({
                url: transferTypeUrlTemplate.replace('__BIO_ID__', existingBiography.id),
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    target_type: targetType
                },
                beforeSend: function() {
                    $('#confirm_transfer_btn').attr('disabled', true);
                },
                complete: function() {
                    $('#confirm_transfer_btn').attr('disabled', false);
                },
                success: function() {
                    transferCompleted = true;
                    $('#existingCvModal').modal('hide');
                    cuteToast({
                        type: "success",
                        message: "تم نقل نوع السيرة بنجاح",
                        timer: 3000
                    });
                    window.location.href = getRedirectUrlByCategory(targetType);
                },
                error: function(xhr) {
                    let message = "حدث خطأ أثناء نقل نوع السيرة";
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    }
                    cuteToast({
                        type: "error",
                        message: message,
                        timer: 3000
                    });
                }
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
            $.get("{{ url('/admin/country-price') }}/" + id + "/" + religion_id + "/{{ $value }}",
                function(response) {
                    $('#recruitment_price').val(response);
                });

        });

        $(document).on('change', '#religion_id', function() {
            var id = $(".nationality").val();
            var religion_id = $(this).val();
            $.get("{{ url('/admin/country-price') }}/" + id + "/" + religion_id + "/{{ $value }}",
                function(response) {
                    $('#recruitment_price').val(response);
                });
        });

        $(document).on('submit', 'form#Form', function(e) {
            e.preventDefault();

            const passportNumber = ($('#passport_number').val() || '').trim();
            if (!passportNumber || transferCompleted) {
                submitCreateFormRequest();
                return;
            }

            lookupPassport(passportNumber, function(response) {
                if (response.exists) {
                    existingBiography = response.biography;
                    transferCompleted = false;
                    renderExistingBiographyDetails(existingBiography);
                    $('#transfer_target_type').val(currentCreateCategory());
                    $('#existingCvModal').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#existingCvModal').modal('show');

                    cuteToast({
                        type: "warning",
                        message: "رقم الجواز مستخدم بالفعل. قم بنقل السيرة الحالية أو غيّر رقم الجواز",
                        timer: 4000
                    });
                    return;
                }

                existingBiography = null;
                transferCompleted = false;
                submitCreateFormRequest();
            }, function() {
                cuteToast({
                    type: "error",
                    message: "تعذر التحقق من رقم الجواز حالياً، حاول مرة أخرى",
                    timer: 3000
                });
            });

        });

        $(document).on('input', '#video_url', function() {
            const url = $(this).val().trim();
            const iframe = $('#video_preview_iframe');
            if (!url) {
                iframe.addClass('d-none').attr('src', '');
                return;
            }
            iframe.removeClass('d-none').attr('src', url);
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
