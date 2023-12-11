@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Application for the recruitment of domestic workers')}}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="overlay-wraper page-banner">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="banner-content">
                <div class="banner-title">
                    <div class="banner-title-name">
                        <h2> خدمات الاستقدام </h2>
                    </div>
                </div>
                <div>
                    <ul class="page-breadcrump list-unstyled">
                        <li><a href="{{route('home')}}">الرئيسية</a></li>
                        <li> خدمات الاستقدام </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- JOBS SERVICES SECTION START -->
    <section class=" Services-Section page-services">

        <div class="container-fluid">
            <div class="wt-separator-two-part">
                <div class="row wt-separator-two-part-row">
                    <div class="col-xl-8 col-lg-8 col-md-12 wt-separator-two-part-right">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div>خدمات الاستقدام</div>
                            </div>
                            <h2 class="wt-title">تعرف علي الخدمات التي نقدمها للمجتمع ...</h2>
                        </div>
                        <!-- TITLE END-->
                    </div>
                </div>
            </div>
            <div class="Services-boxes">
                <div class="job-categories-style1 m-b30">
                    <div class="row ">
                        <!-- COLUMNS 1 -->
                        @foreach($ourServices as $key=> $service)
                            <!-- slide -->


                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="job-categories-block">
                                    <div class="twm-media">
                                        <div class="flaticon-dashboard">
                                            @if($key==0)
                                            <i class="fa-thin fa-plane"></i>
                                            @elseif($key==1)
                                            <i class="fa-thin fa-briefcase me-2"></i>
                                            @elseif($key==2)
                                            <i class="fa-thin fa-passport"></i>
                                            @elseif($key==3)
                                            <i class="fa-thin fa-id-card"></i>
                                            @else
                                                <i class="fa-thin fa-file-alt"></i>

                                            @endif
                                        </div>
                                    </div>
                                    <div class="twm-content">
                                        <div class="twm-jobs-available"> {{$service->title}}</div>
                                        <p> {{ $service->desc}}  </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOBS SERVICES SECTION END -->

@endsection

