<!doctype html>
<html lang="{{ app()->getLocale() ?? 'ar' }}">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        {{ $settings->title ?? ($setting->title ?? 'شركة موطن للاستقدام') }} - @yield('title')
    </title>

    {{-- Dynamic description: views can set a section "meta_description" --}}
    <meta name="description" content="@yield('meta_description', $settings->description ?? ($setting->description ?? ''))" />
    <meta name="keywords" content="@yield('meta_keywords', $settings->keywords ?? ($setting->keywords ?? ''))">
    <link rel="canonical" href="{{ request()->url() }}" />

    <meta property="og:title" content="شركة ساعد للاستقدام">
    <meta property="og:image" content="{{ asset(path: 'frontend') }}/img/logo/logoH.svg">
    <meta property="og:image:secure_url" content="{{ asset('frontend') }}/img/logo/logoH.svg" />
    <meta property="og:image:type" content="svg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description"
        content="أحد أعرق شركات الاستقدام في المملكة منذ أكثر منذ ثلاثون عاما ولدينا عشرة فروع خارج المملكة لجلب أفضل العمالة المدربة والماهرة طبقا للمعايير الدولية ارضاءا لعملائنا">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', $settings->title ?? ($setting->title ?? ''))">
    <meta name="twitter:description" content="@yield('twitter_description', $settings->description ?? ($setting->description ?? ''))">
    <meta name="twitter:image" content="@yield('twitter_image', asset('frontend') . '/img/logo/logoH.svg')">

    {{-- JSON-LD Organization Schema (basic) --}}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "{{ url('/') }}",
            "name": "{{ $settings->title ?? $setting->title ?? config('app.name') }}",
            "logo": "{{ asset('frontend') . '/img/logo/logoH.svg' }}"
        }
        </script>
    <!-- icon -->
    @include('frontend.layouts.assets._css')
    <link rel="stylesheet" media="all" href="{{ asset('frontend') }}/cute-alert-master/style.css" />
    @yield('styles')
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/images/logo/fav.svg" />


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-75TB8EBS26"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-75TB8EBS26');
    </script>
    <!-- Hotjar Tracking Code for my site -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3406884,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <style>


    </style>

    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/bot.css') }}">
    <script>
        var botmanWidget = {
            aboutText: 'شركة موطن للاستقدام',
            introMessage: "مرحبا بكـ كيف يمكنني مساعدتك اليوم ؟",
            title: 'تواصل معنا',
            bubbleBackground: '#00897e',
            headerTextColor: '#fff',
            placeholderText: 'إكتب رسالتك هنا',
            aboutLink: 'https:\\saaid-sa.com',

        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/bot.css') }}">

    <style>
        #messageArea {
            overflow-y: scroll;
            background-color: whitesmoke !important;
        }
    </style>
</head>

<body>


    <!-- loader -->
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->
    <!-- end loader -->

    <!-- ================ Header ================= -->
    @include('frontend.layouts.inc._header')
    <!-- ================ /Header ================= -->
    <!--(((((((((((((((((((((((()))))))))))))))))))))))-->
    <!--((((((((((((((((((( content )))))))))))))))))))-->
    <!--(((((((((((((((((((((((()))))))))))))))))))))))-->

    <content @if (Request::segment(2) === null or
            Request::segment(2) == 'login' or
            Request::segment(2) == 'register' or
            Request::segment(2) == 'forget-password')  @endif>

        @yield('content')

        {{--    <div class="modal fade cvModal" id="showDetails" tabindex="-1"> --}}
        {{--        <div class="modal-dialog modal-dialog-centered modal-lg"> --}}
        {{--            <div class="modal-content" id="CVHere"> --}}

        {{--            </div> --}}
        {{--        </div> --}}
        {{--    </div> --}}

        @if (Request::segment(2) != 'register')
            @include('frontend.layouts.inc._footer')
        @endif
    </content>
    <!--(((((((((((((((((((((((()))))))))))))))))))))))-->
    <!--((((((((((((((((( / content )))))))))))))))))))-->
    <!--(((((((((((((((((((((((()))))))))))))))))))))))-->
    <!-- ================ Footer ================= -->

    <!-- ================ /Footer ================= -->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--/////////////////////////////JavaScript/////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    @include('frontend.layouts.assets._js')
    {{-- <script> --}}
    {{--    $("header").load("frontend.layouts.inc._header"); --}}
    {{--    $("footer").load("frontend.layouts.inc._footer"); --}}
    {{-- </script> --}}

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('js')


    <script>
        var cv_loader = ` <div class="linear-background"></div>`;

        $(document).on('click', '.cvDetails', function(e) {
            e.preventDefault()
            var id = $(this).attr('attr-id');
            var type = $(this).attr("attr-type");
            // alert(type);
            var url = '{{ route('front.show-worker-details', [':id', ':type']) }}';
            url = url.replace(':id', id);
            url = url.replace(':type', type)
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function() {
                    $("#CVHere").html(cv_loader)
                    $('#showDetails').modal('show')
                    //$(".spinner").show()
                },
                success: function(data) {
                    //$(".spinner").hide()
                    window.setTimeout(function() {
                        $('#CVHere').html(data.html);
                    }, 1000);
                    new Swiper(".workerCvSlider", {
                        spaceBetween: 0,
                        centeredSlides: true,
                        // loop: true,
                        speed: 1000,
                        pagination: {
                            el: ".workerCvSliderpagination",
                            clickable: true,
                        },
                        keyboard: {
                            enabled: true,
                        },
                        navigation: {
                            nextEl: ".workerCvSliderNext",
                            prevEl: ".workerCvSliderPrev",
                        },
                    });
                },
                error: function(data) {
                    $('#showDetails').modal('hide')
                    alert('{{ __('frontend.errorTitleAuth') }}')
                }
            });

        });

        $(document).on('click', '.Recruitment_Request', function(e) {
            e.preventDefault()
            var ob = $(this)
            var id = $(this).attr('attr-id');
            var url = '{{ route('front.completeTheRecruitmentRequest', ':id') }}';

            var customer_support = $('input[name="customer"]:checked').val()
            if (customer_support == '' || customer_support == null) {
                cuteToast({
                    type: "warning", // or 'info', 'error', 'warning'
                    message: "{{ __('frontend.please Select From Customer Support') }}",
                    timer: 3000
                })
                return 0;
            }
            @if (auth()->check())
                if (customer_support == '' || customer_support == null) {
                    cuteToast({
                        type: "warning", // or 'info', 'error', 'warning'
                        message: "{{ __('frontend.please Select From Customer Support') }}",
                        timer: 3000
                    })
                    return 0;
                }
                url = url.replace(':id', id) + "?customerSupport=" + customer_support;
                $.ajax({
                    url: url,
                    type: 'GET',
                    beforeSend: function() {
                        ob.attr('disabled', true)
                        ob.html(`<i class='fa fa-spinner fa-spin '></i>`)
                    },
                    success: function(data) {
                        ob.attr('disabled', false)
                        ob.html(`{{ __('frontend.Recruitment Request') }}
                    <i class="fa-solid fa-briefcase ms-2"></i>`)
                        {{-- cuteAlert({ --}}
                        {{--    title: "{{__('frontend.Congratulation')}}", --}}
                        {{--    message: `{{__('frontend.Thanks ,We will contact you as soon as possible.')}}`, --}}
                        {{--    type: "success", // or 'info', 'error', 'warning' --}}
                        {{--    buttonText: "{{__('frontend.ok')}}" --}}
                        {{-- }).then((e)=>{ --}}
                        {{--    location.replace("{{route('auth.profile')}}") --}}
                        {{-- }) --}}
                        var id2 = data.order_id;
                        location.replace('/show_selected_staff/' + id2)

                    },
                    error: function(data) {
                        ob.html(`{{ __('frontend.Recruitment Request') }}
                <i class="fa-solid fa-briefcase ms-2"></i>`)
                        if (data.status === 400) {
                            cuteToast({
                                type: "warning", // or 'info', 'error', 'warning'
                                message: "{{ __('frontend.this worker had reserved') }}",
                                timer: 3000
                            })
                        }

                        if (data.status === 500) {
                            cuteToast({
                                type: "error", // or 'info', 'error', 'warning'
                                message: "{{ __('frontend.there ar an error') }}",
                                timer: 3000
                            })
                        }
                    }
                });
            @else
                {{-- cuteAlert({ --}}
                {{--    type: "question", --}}
                {{--    title: "{{__('frontend.AlertNotificationForAuth')}}", --}}
                {{--    message: "{{__('frontend.AlertMessageForAuthComplete')}}", --}}
                {{--    confirmText: "{{__('frontend.Login')}}", --}}
                {{--    cancelText: "{{__('admin.cancel')}}" --}}
                {{-- }).then((e)=>{ --}}
                {{--    if ( e == 'confirm'){ --}}
                var url = "{{ route('register', [':id', 'customer_id']) }}";
                url = url.replace(':id', id);
                url = url.replace('customer_id', customer_support);
                location.replace(url);
                //     }
                // })
            @endif


        });
    </script>

    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <script src="{{ asset('frontend/jQuery-Form-Validator/form-validator/lang/ar.js') }}"></script>
    @else
        <script src="{{ asset('frontend/jQuery-Form-Validator/form-validator/jquery.form-validator.js') }}"></script>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script src="{{ asset('frontend') }}/cute-alert-master/cute-alert.js"></script>

    <script>
        $.validate({
            ignore: 'input[type=hidden]',
            modules: 'date, security',
            lang: "{{ LaravelLocalization::getCurrentLocale() }}",
        });
    </script>
    <script>
        // side menu
        $(".sideBtn").click(function() {
            $(this).toggleClass("active");
            $(".sideMenu").toggleClass("active");
        });
    </script>
    {{-- <script> --}}
    {{--    window.addEventListener("load", () => { --}}
    {{--        if ("serviceWorker" in navigator) { --}}
    {{--            navigator.serviceWorker.register("service-worker.js"); --}}
    {{--        } --}}
    {{--    }); --}}
    {{-- </script> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="floating-container">
        <div class="floating-button"><i class="material-icons">headset_mic</i></div>
        <div class="element-container">

            <a href="tel:{{ $settings->phone3 }}" target="_blank">
                <span class="float-element tooltip-left">
                    <i class="material-icons">phone
                    </i>
                </span>
            </a>

            <span class="float-element">
                <a href="https://api.whatsapp.com/send?phone={{ $settings->phone2 }}" target="_blank">
                    <i style="color: white" class="material-icons">chat
                    </i>
                </a>
            </span>

            <span class="float-element">
                <a href="mailto:{{ $settings->email1 }}" target="_blank">

                    <i style="color: white" class="material-icons">mail</i>
                </a>
            </span>

        </div>
    </div>

    {{--  
    script type="text/javascript" id="zsiqchat">
        // var $zoho = $zoho || {};
        // $zoho.salesiq = $zoho.salesiq || {
        //     widgetcode: "1374f2985a632c4a947256514f29b3268eadfb66f06b92f9fbebb7b525b9bd97",
        //     values: {},
        //     ready: function() {}
        // };
        // var d = document;
        // s = d.createElement("script");
        // s.type = "text/javascript";
        // s.id = "zsiqscript";
        // s.defer = true;
        // s.src = "https://salesiq.zoho.com/widget";
        // t = d.getElementsByTagName("script")[0];
        // t.parentNode.insertBefore(s, t);
    </script>
    --}}
</body>
@toastr_render

</html>
