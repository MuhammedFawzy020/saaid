@extends('admin.layouts.layout')
@section('styles')
    <!-- Data Tables -->
    <!-- DataTables -->
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />


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
    إنشاء مدونة
@endsection


@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('blogs.store') }}" method="post" id="Form">
                @csrf

                <div class="row ">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="title_ar">{{ __('admin.title') }}
                            </label>
                            <input data-validation="required" type="text" class="form-control" value=""
                                id="title_ar" name="title_ar" placeholder="{{ __('admin.title') }} ">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="image">{{ __('admin.Image') }}
                            </label>
                            <input data-validation="required" type="file" class="form-control" value=""
                                id="image" name="image" placeholder="{{ __('admin.Image') }} ">
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                        <div class="form-group">
                            <label for="image">{{ __('admin.blog-content') }}
                            </label>
                            <textarea class="form-control" id="editor" name="description_ar"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-4 mt-4">
                        <input type="submit" class="btn btn-success w-100" value="{{ __('admin.save') }}" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <!-- Required datatable js -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <!-- Responsive examples -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        $(document).on('submit', 'form#Form', function(e) {
            e.preventDefault();
            var myForm = $("#Form")[0]
            var formData = new FormData(myForm)
            var url = $('#Form').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function() {
                    $('.loader-ajax').show()
                },
                complete: function() {

                },
                success: function(data) {
                    $('#exampleModalCenter').modal('hide')
                    $('.loader-ajax').show()
                    window.setTimeout(function() {
                        $('.loader-ajax').hide()
                        $('#exampleModalCenter').modal('hide')
                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "تمت العملية بنجاح",
                            timer: 3000
                        })

                    }, 20);
                    datatable_selector.draw();
                },
                error: function(data) {
                    $('.loader-ajax').hide()

                    if (data.status === 500) {
                        $('#exampleModalCenter').modal("hide");
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



        /*======================================================*/
        /*======================================================*/
        /*====================Edit=======================*/
        /*======================================================*/
        /*======================================================*/




        /*======================================================*/
        /*======================================================*/
        /*====================Delete Multi Row=================*/
        /*======================================================*/
        /*======================================================*/



        /*======================================================*/
        /*======================================================*/
        /*====================toggle for checkbox===============*/
        /*======================================================*/
        /*======================================================*/
    </script>
@endsection
