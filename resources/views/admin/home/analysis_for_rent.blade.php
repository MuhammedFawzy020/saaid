@extends('admin.layouts.layout')

@section('page-title')
    إحصائيات الطلبات للإيجار
@endsection

@section('content')

@php
    $statusLabels = [
        'under_work' => 'حجز السيره الزاتية',
        'contract' => 'تم التعاقد',
        'musaned' => 'تم الربط في مساند',
        'traning' => 'تم الاجراء و التدريب',
        'visa' => 'ختم التأشيرة',
        'finished' => 'وصول العماله',
        'canceled' => 'ملغية',
    ];

    $colors = [
        'new' => '#007bff',
        'contract' => '#28a745',
        'under_work' => '#17a2b8',
        'musaned' => '#ffc107',
        'traning' => '#6c757d',
        'visa' => '#6610f2',
        'finished' => '#20c997',
        'canceled' => '#dc3545',
    ];

    $icons = [
        'new' => 'bx bx-plus-circle',
        'contract' => 'bx bx-file',
        'under_work' => 'bx bx-loader-circle',
        'musaned' => 'bx bx-send',
        'traning' => 'bx bx-book',
        'visa' => 'bx bx-globe',
        'finished' => 'bx bx-check-circle',
        'canceled' => 'bx bx-x-circle',
    ];
    
@endphp

{{-- Sections: Today / Week / Month / Total --}}
@foreach (['today' => 'اليوم الحالي', 'week' => 'الأسبوع الحالي', 'month' => 'الشهر الحالي', 'total' => 'بشكل عام و شامل'] as $periodKey => $title)
    @php
    $totalCount = collect($analysis)->sum(function($data) use ($periodKey) {
        return $data[$periodKey];
    });
@endphp
<style>
    .avatar-title{
        background-color: transparent !important;
    }
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">
            احصائيات الطلبات لـ{{ $title }}
            <span class="text-muted fs-5" style="font-weight: normal;">(الإجمالي: {{ $totalCount }})</span>
        </h4>

        <div class="text-center text-muted">
            <div class="row">
                @foreach ($analysis as $status => $data)
                    <div class="col-md-4 col-xl-3">
                        <div class="card mini-stats-wid mb-3">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium mb-2">{{ $statusLabels[$status] ?? $status }}</p>
                                        <h4 class="mb-0">{{ $data[$periodKey] }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle"
                                            style="background-color: {{ $colors[$status] ?? '#6c757d' }}">
                                            <span class="avatar-title text-white">
                                                <i class="{{ $icons[$status] ?? 'bx bx-circle' }} font-size-20"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endforeach

@endsection
