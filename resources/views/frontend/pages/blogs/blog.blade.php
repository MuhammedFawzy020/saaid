@extends('frontend.layouts.layout')

@section('title')
    {{ __('frontend.Application for the recruitment of domestic workers') }}
@endsection

@section('styles')
    <style></style>
@endsection


@section('content')
    <div class=" overlay-wraper page-banner">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="banner-content">
                <div class="banner-title">
                    <div class="banner-title-name">
                        <h2>{{ $blog->title_ar }}</h2>
                    </div>
                </div>
                <div>
                    <ul class="page-breadcrump list-unstyled">
                        <li><a href="{{ route('home') }}">الرئيسية</a></li>
                        <li>المدونة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- ===========================================contact-us ======================================== -->
    <!-- CONTACT FORM -->
    <div class="page-contact-section">
        <div class="section-content">
            <div class="container">
                <!-- CONTACT FORM-->
                <div>
                    <div class="row">
                        <div class="col-lg-12 mt-4 col-md-12">
                            <div style="min-height:30vh">
                                <div clas="row mb-2">
                                    <div class="col-12 text-center">
                                        <img src="{{ get_file($blog->image) }}" alt="{{ $blog->image }}" />
                                    </div>
                                </div>
                                <h4>
                                    {{ $blog->title_ar }}
                                </h4>
                                <br>
                                {!! $blog->description_ar !!}
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
