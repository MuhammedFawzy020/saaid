@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.faq')}}
@endsection

@section('styles')
    <style>
    </style>
@endsection


@section('content')


    <content>
{{--        <!-- Main Banner  -->--}}
{{--        <section class="banner">--}}
{{--            <h1> {{__('frontend.faq')}} </h1>--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <a href="{{route('home')}}"> {{__('frontend.Home')}} </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#!" class="active">{{__('frontend.faq')}} </a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--        </section>--}}
{{--        <!-- Main Banner  -->--}}

{{--        @if (count($questions)>0)--}}

{{--            <section class="faq pb-5" id="faq">--}}
{{--                <div class="container">--}}
{{--                    <!-- Section Title -->--}}
{{--                    <!-- <div class="SectionTitle">--}}
{{--                        <h2 class="title"> {{__('frontend.faq')}} </h2>--}}
{{--                    </div> -->--}}
{{--                    <div class="accordion" id="faqAccordion">--}}
{{--                        @foreach($questions as $question)--}}
{{--                            <!-- question -->--}}
{{--                            <div class="accordion-item wow fadeInUp">--}}
{{--                                <h2 class="accordion-header">--}}
{{--                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question{{$question->id}}"--}}
{{--                                            aria-controls="question{{$question->id}}">--}}
{{--                                        {{$question->title}}--}}
{{--                                    </button>--}}
{{--                                </h2>--}}
{{--                                <div id="question{{$question->id}}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">--}}
{{--                                    <div class="accordion-body">--}}
{{--                                        <p>{{$question->desc}} </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- question -->--}}
{{--                        @endforeach--}}

{{--                        <!-- show more Btn -->--}}
{{--                        <!-- <div class="showAll">--}}
{{--                            <a href="#!"> {{__('frontend.show')}}--}}
{{--                                <span class="less"> {{__('frontend.less')}} </span>--}}
{{--                                <span class="more"> {{__('frontend.more')}} </span>--}}
{{--                            </a>--}}
{{--                            <i class="fa-light fa-chevron-down ms-2"></i>--}}
{{--                        </div> -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

{{--        @else--}}

{{--            <section class="faq">--}}
{{--                <div class="container">--}}
{{--                    <div class="accordion" id="faqAccordion">--}}
{{--                        <!-- question -->--}}
{{--                        <div class="accordion-item " data-aos=" fade-up">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#question1"--}}
{{--                                        aria-controls="question1">--}}
{{--                                    كيف يتم استخراج التأشيرة ؟--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="question1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <ul>--}}
{{--                                        <li> فتح حساب في مساند</li>--}}
{{--                                        <li>ادخل حسابي</li>--}}
{{--                                        <li>لوحة التحكم</li>--}}
{{--                                        <li> فتح حساب في مساند</li>--}}
{{--                                        <li>ادخل حسابي</li>--}}
{{--                                        <li>لوحة التحكم</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- question -->--}}
{{--                        <div class="accordion-item " data-aos=" fade-up">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question2"--}}
{{--                                        aria-controls="question2">--}}
{{--                                    كم مدة استخراج التأشيرة؟--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="question2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <p>خلال 24 ساعة. </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- question -->--}}
{{--                        <div class="accordion-item " data-aos=" fade-up">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question3"--}}
{{--                                        aria-controls="question3">--}}
{{--                                    كم مدة استخراج التأشيرة؟--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="question3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <p>خلال 24 ساعة. </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

{{--        @endif--}}
        <!-- INNER PAGE BANNER -->
        <div class=" overlay-wraper page-banner">
            <div class="overlay-main"></div>
            <div class="container">
                <div class="banner-content">
                    <div class="banner-title">
                        <div class="banner-title-name">
                            <h2>الأسئلة الشائعة</h2>
                        </div>
                    </div>
                    <div>
                        <ul class="page-breadcrump list-unstyled">
                            <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li>الأسئلةالشائعة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        @if (count($questions)>0)
        <!-- FAQ START -->
        <div class="faq-section">
            <div class="container">
                <div class="faq-content">
                    <div class="accordion-faq">
                        <!--One-->
                        @foreach($questions as $question)
                        <div class="accordion-item">
                            <button class="accordion-button" type="button" aria-expanded="true"   data-bs-toggle="collapse" data-bs-target="#question{{$question->id}}"
                                    aria-controls="question{{$question->id}}">
                                {{$question->title}}
                            </button>
                            <div  id="question{{$question->id}}"  class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                <div class="accordion-body">
                                    <p>{{$question->desc}} </p>
                                </div>
                            </div>
                        </div>




                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ END -->
        @else
            <div class="faq-section">
                <div class="container">
                    <div class="faq-content">
                        <div class="accordion-faq">
                            <!--One-->
                            <div class="accordion-item">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#FAQ1">
                                    كيف يتم استخراج التأشيرة ؟
                                </button>
                                <div id="FAQ1" class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li><p> فتح حساب في مساند</p></li>
                                            <li><p> ادخل حسابي </p></li>
                                            <li><p> لوحة التحكم  </p></li>
                                            <li><p> فتح حساب في مساند</p></li>
                                            <li><p> ادخل حسابي </p></li>
                                            <li><p> لوحة التحكم  </p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Two-->
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ2" aria-expanded="false">
                                    كم مدة استخراج التأشيرة؟
                                </button>
                                <div id="FAQ2" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                        خلال 24 ساعة
                                    </div>
                                </div>
                            </div>
                            <!--Three-->
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ3" aria-expanded="false">
                                    كم مدة استخراج التأشيرة؟
                                </button>
                                <div id="FAQ3" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                        خلال 24 ساعة
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </content>





@endsection


