@extends('admin.layouts.layout')
@section('styles')
    <!-- include summernote css/js -->
    <link href="summernote-bs5.css" rel="stylesheet">
    {{--    <link href="{{asset('dashboard/summernote/summernote-bs4.css')}}">--}}
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

@endsection

@section('page-title')
متطلبات الاستقدام
@endsection


@section('content')



    <div class="card">
        <div class="card-body">


            <div class="tab-content" id="v-pills-tabContent">
                {{----------------------------------}}

                <div class="tab-pane fade show active" id="v-pills-main" role="tabpanel"
                     aria-labelledby="v-pills-main-tab">


                  @include('admin.recruitmentRequirement.parts.form1')

                    @include('admin.recruitmentRequirement.parts.form2')

                </div>


                {{----------------------------------}}
            </div>


        </div>
    </div>





@endsection


@section('js')

    <script>

        $(document).on('submit', 'form#Form_row1', function (e) {
            e.preventDefault();
            var myForm = $("#Form_row1")[0]
            var formData = new FormData(myForm)
            var url = $('#Form_row1').attr('action');

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('.loader-ajax').show()
                },
                complete: function () {


                },
                success: function (data) {
                    $('.loader-ajax').hide()
                    $(".logo_basic").attr("src", data.logo);
                    cuteToast({
                        type: "success", // or 'info', 'error', 'warning'
                        message: "تم تعديل الإعدادات العامة",
                        timer: 3000
                    });
                },
                error: function (data) {
                    $('.loader-ajax').hide()
                    if (data.status === 500) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "يوجد خطأ ",
                            timer: 3000
                        });


                    }
                    if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
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
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });




        });


    </script>




    <script>

        $(document).on('submit', 'form#Form_row2', function (e) {
            e.preventDefault();
            var myForm = $("#Form_row2")[0]
            var formData = new FormData(myForm)
            var url = $('#Form_row2').attr('action');




            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('.loader-ajax').show()
                },
                complete: function () {


                },
                success: function (data) {
                    $('.loader-ajax').hide()
                    $(".logo_basic").attr("src", data.logo);
                    cuteToast({
                        type: "success", // or 'info', 'error', 'warning'
                        message: "تم تعديل الإعدادات العامة",
                        timer: 3000
                    });
                },
                error: function (data) {
                    $('.loader-ajax').hide()
                    if (data.status === 500) {
                        cuteToast({
                            type: "error", // or 'info', 'error', 'warning'
                            message: "يوجد خطأ ",
                            timer: 3000
                        });


                    }
                    if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
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
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });

        });


    </script>




@endsection
