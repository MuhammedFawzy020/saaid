@extends('admin.layouts.layout')
@section('styles')
    <!-- Data Tables -->
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
    {{ $value == 'rental' ? 'السير الذاتية للايجار' : 'السير الذاتية' }}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center bg-orange">
                <h4 class="card-title mb-0 text-white"> بحث</h4>
                <div class="card-actions ms-auto">
                    <a class="text-dark" data-action="collapse"><i class="ti-minus"></i></a>
                    <a class="btn-close ms-1" data-action="close"></a>
                </div>
            </div>
            <div class="card-body collapse show">
                <div class="row">
                    <div class="col-md-2 ">
                        <div class='input-group mb-3'>
                            <input type="text" class="form-control" id="passport_key" name="passport_key"
                                   @isset($passport_key) value="{{ $passport_key }}" @endisset
                                   placeholder="ابحث برقم جواز السفر">
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class='input-group mb-3'>
                            <select class="form-control " name="nationality_id" id="nationality_id">
                                <option value="" selected>اختار الجنسية</option>
                                @foreach ($natinalities as $key => $country)
                                    <option value="{{ $country->id }}" @if ($nationality_id == $country->id) selected @endif>
                                        {{ $country->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class='input-group mb-3'>
                            <select class="form-control " name="recruitment_office_id" id="recruitment_office_id">
                                <option value="" selected>اختار الوكيل</option>
                                @foreach ($recruitment_office as $key => $office)
                                    <option value="{{ $office->id }}" @if ($recruitment_office_id == $office->id) selected @endif>
                                        {{ $office->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class='input-group mb-3'>
                            <select class="form-control " name="social_type" id="social_type">
                                <option value="" selected> خبرة العامل</option>
                                <option value="1" @if ($social_type_id == 1) selected @endif>قادم جديد</option>
                                <option value="2" @if ($social_type_id == 2) selected @endif> لديه خبره</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 ml-auto">
                        <select class="form-control " name="booking_status" id="booking_status">
                            <option value=" " selected>حالة السيرة</option>
                            <option value="new" @if ($booking_status == 'new') selected @endif>غير محجوز</option>
                            <option value="under_work" @if ($booking_status == 'under_work') selected @endif>حجز السيرة الذاتية</option>
                            <option value="contract" @if ($booking_status == 'contract') selected @endif>تم التعاقد</option>
                            <option value="musaned" @if ($booking_status == 'musaned') selected @endif>تم الربط فى مساند</option>
                            <option value="traning" @if ($booking_status == 'traning') selected @endif>تحت الاجراء والتدريب</option>
                            <option value="visa" @if ($booking_status == 'visa') selected @endif>ختم التأشيرة</option>
                            <option value="finished" @if ($booking_status == 'finished') selected @endif>وصول العمالة</option>
                            <option value="canceled" @if ($booking_status == 'canceled') selected @endif>ملغى</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ml-auto">
                        <select class="form-control " name="type" id="type">
                            <option value=" " selected>نوع السيرة</option>
                            <option value="admission" @if ($type == 'admission') selected @endif>استقدام</option>
                            <option value="transport" @if ($type == 'transport') selected @endif>نقل خدمات</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ml-auto">
                        <div class='input-group mb-3' style="width: 228px">
                            <input type='text' class="form-control " id="reportrange" name="datefilter"
                                   @isset($date) value="{{ $date }}" @endisset
                                   placeholder="مدى التاريخ" data-separator=" - " autocomplete="off" data-advanced-range="true" />
                            <span class="input-group-text">
                                <i class="feather-sm fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2 text-end">
                        @if (count($_GET) > 0)
                            <a id="cancel_request" href="{{ route('biographies.index') }}" class="btn btn-danger">إلغاء البحث</a>
                        @endif
                        <button id="btnSubmit" class="btn btn-info">بحث</button>
                    </div>
                    <div class="col-md-2 text-end">
                        @if (checkPermission(19))
                            <a href="{{ route('biographies.create', $value) }}" id="addButton" type="button"
                               class="btn btn-success waves-effect waves-light mb-2 me-2">
                                أضف جديد
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <table id="Datatable" class="table table-striped table-bordered dt-responsive nowrap w-100">
                <thead>
                    <tr>
                        <th>
                            <input id="checkAll" type='checkbox' class='check-all form-check-input' data-tablesaw-checkall>

                            <!-- Bulk actions -->
                            <a id="bulk_delete" href="#" style="display:none;" class="text-danger p-2" title="حذف جماعي">
                                <i class="mdi mdi-trash-can-outline me-1"></i>
                            </a>

                            <!-- NEW: Bulk Activate / Deactivate visibility -->
                            <a id="bulk_active" href="#" style="display:none;" class="text-success p-2" title="تفعيل العرض">
                                <i class="mdi mdi-eye-outline me-1"></i>
                            </a>
                            <a id="bulk_inactive" href="#" style="display:none;" class="text-warning p-2" title="إخفاء">
                                <i class="mdi mdi-eye-off-outline me-1"></i>
                            </a>
                        </th>

                        <th>الصورة</th>
                        <th>الحالة</th>
                        <th>الجنسية</th>
                        <th>رقم جواز السفر</th>
                        <th>الخبرة العملية</th>
                        <th>الوكيل</th>
                        <th>النوع</th>
                        <th>التاريخ</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">المنتجات</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="form-for-addOrDelete"></div>
            <div class="modal-footer justify-content-center align-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>
                <button form="Form" type="submit" class="btn btn-success">
                    حفظ &nbsp;<i class="fa fa-save"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!-- Required datatable js -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        let datatable_selector = $('#Datatable').DataTable({
            dom: 'Bfrtip',
            responsive: 1,
            processing: true,
            lengthChange: true,
            serverSide: true,
            ordering: true,
            searching: false,
            iDisplayLength: 20,
            ajax: {
                url: "{{ route('biographies.index', $value) }}",
                data: function(d) {
                    d.passport_key = $('#passport_key').val();
                    d.social_type = $('#social_type').val();
                    d.booking_status = $('#booking_status').val();
                    d.nationality_id = $('#nationality_id').val();
                    d.recruitment_office_id = $('#recruitment_office_id').val();
                    d.type = $('#type').val();
                }
            },
            columns: [
                { data: "delete_all", orderable: false, searchable: false },
                { data: "image", orderable: false, searchable: false },
                { data: "status", orderable: false, searchable: true },
                { data: "nationalitie_id", orderable: false, searchable: true },
                { data: "passport_number", orderable: false, searchable: true },
                { data: "type_of_experience", orderable: false, searchable: true },
                { data: "recruitment_office_id", orderable: false, searchable: true },
                { data: "type", orderable: false, searchable: true },
                { data: "created_at", searchable: false },
                { data: "actions", orderable: false, searchable: false }
            ],
            language: {
                "sProcessing": "{{ __('admin.sProcessing') }}",
                "sLengthMenu": "{{ __('admin.sLengthMenu') }}",
                "sZeroRecords": "{{ __('admin.sZeroRecords') }}",
                "sInfo": "{{ __('admin.sInfo') }}",
                "sInfoEmpty": "{{ __('admin.sInfoEmpty') }}",
                "sInfoFiltered": "{{ __('admin.sInfoFiltered') }}",
                "sSearch": "{{ __('admin.sSearch') }}:",
                "oPaginate": {
                    "sFirst": "{{ __('admin.sFirst') }}",
                    "sPrevious": "{{ __('admin.sPrevious') }}",
                    "sNext": "{{ __('admin.sNext') }}",
                    "sLast": "{{ __('admin.sLast') }}"
                }
            },
            order: [[2, "desc"]],
        });

        $("#btnSubmit").click(function() {
            if ($("#cancel_request").html() == undefined && $('.cancel_request_add').hide()) {
                $('<a href="{{ route('biographies.index') }}" class="btn btn-danger cancel_request_add" style="margin:5px;">إلغاء البحث</a>')
                    .insertAfter("#btnSubmit");
            }
            datatable_selector.ajax.reload();
        });

        /* ================== Delete Single Row ================== */
        $(document).on('click', '.delete', function() {
            var id = $(this).attr('id');
            Swal.fire({
                title: "هل أنت متأكد من تنفيذ هذا الإجراء ؟",
                text: "لا يمكنك التراجع بعد ذلك !",
                showCancelButton: true,
                type: "warning",
                confirmButtonColor: '#ff675e',
                confirmButtonText: "موافق",
                cancelButtonText: "إلغاء",
                okButtonText: "موافق",
                closeOnConfirm: false
            }).then((result) => {
                if (result.value) {
                    var url = '{{ route('biographies.destroy', ':id') }}';
                    url = url.replace(':id', id);
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: { id: id },
                        success: function() {
                            cuteToast({ type: "success", message: "تم تنفيذ العملية بنجاح", timer: 3000 });
                            datatable_selector.draw();
                        },
                        error: function() {
                            swal.close();
                            cuteToast({ type: "error", message: "أنت لا تملك الصلاحية لفعل هذا ", timer: 3000 });
                        }
                    });
                }
            });
        });

        /* ================== Bulk Delete ================== */
        $(document).on('click', '#bulk_delete', function(e) {
            e.preventDefault();
            var id = [];
            $('.delete-all:checked').each(function() { id.push($(this).attr('id')); });
            if (id.length > 0) {
                Swal.fire({
                    title: "هل أنت متأكد من تنفيذ هذا الإجراء ؟",
                    text: "لا يمكنك التراجع بعد ذلك !",
                    showCancelButton: true,
                    confirmButtonColor: '#ff675e',
                    type: "warning",
                    confirmButtonText: "موافق",
                    cancelButtonText: "إلغاء",
                    okButtonText: "موافق",
                    closeOnConfirm: false
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: '{{ route('biographies.delete.bulk') }}',
                            type: 'POST',
                            data: { id: id, _token: '{{ csrf_token() }}' },
                            success: function() {
                                $("#bulk_delete, #bulk_active, #bulk_inactive").hide();
                                $("#checkAll").prop('checked', false);
                                cuteToast({ type: "success", message: "تم تنفيذ العملية بنجاح", timer: 3000 });
                                datatable_selector.draw();
                            },
                            error: function() {
                                Swal.close();
                                cuteToast({ type: "error", message: "أنت لا تملك الصلاحية لفعل هذا ", timer: 3000 });
                            }
                        });
                    }
                });
            } else {
                Swal.fire({
                    title: "هذه العملية لم تكتمل",
                    text: "من فضلك قم باختيار ما تريد حذفه",
                    type: "error",
                    confirmButtonText: "تم الأمر"
                });
            }
        });

        /* ================== Helpers for Bulk Visibility ================== */
        function getSelectedIds() {
            var ids = [];
            $('.delete-all:checked').each(function () { ids.push($(this).attr('id')); });
            return ids;
        }

        function toggleBulkButtons() {
            const anyChecked = $('.delete-all:checked').length > 0;
            $("#bulk_delete").toggle(anyChecked);
            $("#bulk_active").toggle(anyChecked);
            $("#bulk_inactive").toggle(anyChecked);
        }

        /* ================== Master Checkbox ================== */
        $(document).on('click', '#checkAll', function() {
            const check = !$('.delete-all:checked').length; // replicate your logic
            $('.delete-all').prop('checked', check);
            toggleBulkButtons();
        });

        /* ================== Row Checkbox Toggle ================== */
        $(document).on('click', '.delete-all', function() {
            toggleBulkButtons();
        });

        /* ================== Bulk Activate (display_or_hide = 1) ================== */
        $(document).on('click', '#bulk_active', function(e) {
            e.preventDefault();
            const ids = getSelectedIds();
            if (!ids.length) return;

            $.ajax({
                url: '{{ route('biographies.bulk.visibility') }}',
                type: 'POST',
                data: { ids: ids, status: 1, _token: '{{ csrf_token() }}' },
                success: function () {
                    $("#checkAll").prop('checked', false);
                    toggleBulkButtons();
                    cuteToast({ type: "success", message: "تم تفعيل العرض بنجاح", timer: 2500 });
                    datatable_selector.draw();
                },
                error: function () {
                    cuteToast({ type: "error", message: "تعذر تنفيذ العملية", timer: 3000 });
                }
            });
        });

        /* ================== Bulk Inactivate (display_or_hide = 0) ================== */
        $(document).on('click', '#bulk_inactive', function(e) {
            e.preventDefault();
            const ids = getSelectedIds();
            if (!ids.length) return;

            $.ajax({
                url: '{{ route('biographies.bulk.visibility') }}',
                type: 'POST',
                data: { ids: ids, status: 0, _token: '{{ csrf_token() }}' },
                success: function () {
                    $("#checkAll").prop('checked', false);
                    toggleBulkButtons();
                    cuteToast({ type: "success", message: "تم إخفاء السير الذاتية بنجاح", timer: 2500 });
                    datatable_selector.draw();
                },
                error: function () {
                    cuteToast({ type: "error", message: "تعذر تنفيذ العملية", timer: 3000 });
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('input[name="datefilter"]').daterangepicker({
                autoUpdateInput: false,
                locale: { cancelLabel: 'Clear' }
            });

            $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
            });

            $('input[name="datefilter"]').on('cancel.daterangepicker', function() {
                $(this).val('');
            });
        });
    </script>
@endsection
