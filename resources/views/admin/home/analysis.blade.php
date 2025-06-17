@extends('admin.layouts.layout')
@section('styles')
    <!-- include summernote css/js -->
    <link href="summernote-bs5.css" rel="stylesheet">
    {{--    <link href="{{asset('dashboard/summernote/summernote-bs4.css')}}"> --}}
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
     إحصائيات الطلبات
@endsection


@section('content')
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">احصائيات الطلبات لليوم الحالي</h4>

                <div>
                    <div id="donut-chart" class="apex-charts"></div>
                </div>

                <div class="text-center text-muted">
                    <div class="row">
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i>
                                    إجمالي الطلبات </p>
                                <h5>{{$underWorkToday + $contractedToday + $cancelOrderToday}}</h5>
                            </div>
                        </div>

                            
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i>
                                    الطلبات المحجوزه </p>
                                <h5>{{$underWorkToday}}</h5>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i>
                                    الطلبات المكتمله باتمام التعاقد</p>
                                <h5>{{$contractedToday}}</h5>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-gray me-1"></i> 
                                    الطلبات الملغيه </p>
                                <h5>{{$cancelOrderToday}}</h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
         <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">احصائيات الطلبات للاسبوع الحالي</h4>

                <div>
                    <div id="donut-chart" class="apex-charts"></div>
                </div>

                <div class="text-center text-muted">
                    <div class="row">
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i>
                                    إجمالي الطلبات </p>
                                <h5>{{$underWorkWeek + $contractedWeek + $cancelOrderWeek}}</h5>
                            </div>
                        </div>

                            
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i>
                                    الطلبات المحجوزه </p>
                                <h5>{{$underWorkWeek}}</h5>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i>
                                    الطلبات المكتمله باتمام التعاقد</p>
                                <h5>{{$contractedWeek}}</h5>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-gray me-1"></i> 
                                    الطلبات الملغيه </p>
                                <h5>{{$cancelOrderWeek}}</h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">احصائيات الطلبات للشهر الحالي</h4>

                <div>
                    <div id="donut-chart" class="apex-charts"></div>
                </div>

                <div class="text-center text-muted">
                    <div class="row">
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i>
                                    إجمالي الطلبات </p>
                                <h5>{{$underWorkMonth + $contractedMonth + $cancelOrderMonth}}</h5>
                            </div>
                        </div>

                            
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i>
                                    الطلبات المحجوزه </p>
                                <h5>{{$underWorkMonth}}</h5>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i>
                                    الطلبات المكتمله باتمام التعاقد</p>
                                <h5>{{$contractedMonth}}</h5>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-gray me-1"></i> 
                                    الطلبات الملغيه </p>
                                <h5>{{$cancelOrderMonth}}</h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

         <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">احصائيات الطلبات  بشكل عام و شامل</h4>

                <div>
                    <div id="donut-chart" class="apex-charts"></div>
                </div>

                <div class="text-center text-muted">
                    <div class="row">
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i>
                                    إجمالي الطلبات </p>
                                <h5>{{$underWork + $contracted + $cancelOrder}}</h5>
                            </div>
                        </div>

                            
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i>
                                    الطلبات المحجوزه </p>
                                <h5>{{$underWork}}</h5>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i>
                                    الطلبات المكتمله باتمام التعاقد</p>
                                <h5>{{$contracted}}</h5>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-gray me-1"></i> 
                                    الطلبات الملغيه </p>
                                <h5>{{$cancelOrder}}</h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
@endsection


