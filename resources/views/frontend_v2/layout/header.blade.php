<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>
    شركة ساعد للاستقدام - @yield('title')
</title>

<meta name="description"
    content="أحد أعرق شركات الاستقدام في المملكة منذ أكثر منذ ثلاثون عاما ولدينا عشرة فروع خارج المملكة لجلب أفضل العمالة المدربة والماهرة طبقا للمعايير الدولية ارضاءا لعملائنا" />

<meta property="og:title" content="شركة ساعد للاستقدام">
<meta property="og:image" content="{{ asset('frontend') }}/images/logo/WhatsApp Image 2023-12-11 at 13.51.27_8a0b1f49.jpg">
<meta property="og:image:secure_url" content="{{ asset('frontend') }}/images/logo/WhatsApp Image 2023-12-11 at 13.51.27_8a0b1f49.jpg" />
<meta property="og:image:type" content="svg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:description"
    content="أحد أعرق شركات الاستقدام في المملكة منذ أكثر منذ ثلاثون عاما ولدينا عشرة فروع خارج المملكة لجلب أفضل العمالة المدربة والماهرة طبقا للمعايير الدولية ارضاءا لعملائنا">
<meta property="og:url" content="{{ url('/') }}">
<meta name="twitter:card" content="{{ asset('frontend') }}/images/logo/WhatsApp Image 2023-12-11 at 13.51.27_8a0b1f49.jpg">


<meta name="robots" content="index, follow">
<meta name="description"
    content="شركة ساعد للاستقدام | شركة استقدام عمالة منزلية - استقدم سائق خاص - كينيا - سريلانكا - الفلبين - اوغندا | معتمد من مساند" />

@yield('keywords')
<meta name="twitter:card" content="ساعد  | أفضل شركة استقدام عمالة منزلية بالسعودية">
<meta name="twitter:site"
    content="شركة استقدام,استقدام سائق خاص,استقدام عماله منزليه,شركة استقدام الرياض,شركة استقدام جدة,شركة استقدام عماله منزلية,شركة استقدام سائق,خدمات الاستقدام,ساعد للاستقدام,مواقع مكاتب الاستقدام,مساند مكاتب استقدام,مساند للاستقدام,استقدام عاملة منزلية,استقدام الرياض,منصة مساند,ارخص شركة استقدام,افضل شركة استقدام,تقديم شغالات,استقدام عامل منزلي,اقرب شركة استقدام من موقعي,اسعار تقديم الخادمات,شروط استقدام سائق خاص,شروط استقدام عامل منزلي,شروط الاستقدام,مكاتب الاستقدام المعتمدة,مكاتب الاستقدام المعتمدة من وزارة العمل,شركة استقدام سائق خاص,مكاتب استقدام من الفلبين بالرياض,اسعار استقدام العاملات المنزلية,أفضل شركة استقدام في الرياض,شركة استقدام شمال الرياض,استقدام خادمة سيرلانكية,شركة استقدام كينيا الرياض,مكاتب استقدام فلبينيات بالرياض">
<meta name="twitter:title" content="ساعد  | أفضل شركة استقدام عمالة منزلية بالسعودية">
<meta name="twitter:description"
    content="شركة ساعد للاستقدام | شركة استقدام عمالة منزلية - استقدم سائق خاص - كينيا - سريلانكا - الفلبين - اوغندا | معتمد من مساندشركة ساعد للاستقدام | شركة استقدام عمالة منزلية - استقدم سائق خاص - كينيا - سريلانكا - الفلبين - اوغندا | معتمد من مساند">
<meta name="twitter:creator" content="ساعد  | أفضل شركة استقدام عمالة منزلية بالسعودية">
<meta name="twitter:image" content="{{ asset('frontend') }}/images/logo/WhatsApp Image 2023-12-11 at 13.51.27_8a0b1f49.jpg>">
<!-- Open Graph data -->
<meta property="og:title" content="ساعد  | أفضل شركة استقدام عمالة منزلية بالسعودية" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.mawtenrec.sa" />
<meta property="og:image" content="{{ asset('frontend') }}/images/logo/WhatsApp Image 2023-12-11 at 13.51.27_8a0b1f49.jpg"/>
<meta property="og:description"
    content="شركة ساعد للاستقدام | شركة استقدام عمالة منزلية - استقدم سائق خاص - كينيا - سريلانكا - الفلبين - اوغندا | معتمد من مساند" />
<meta property="og:site_name" content="ساعد  للاستقدام" />
<meta property="og:title" content="ساعد  | أفضل شركة استقدام عمالة منزلية بالسعودية" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:image" content="{{ asset('frontend') }}/images/logo/WhatsApp Image 2023-12-11 at 13.51.27_8a0b1f49.jpg" />
<meta property="og:description"
    content="شركة ساعد للاستقدام | شركة استقدام عمالة منزلية - استقدم سائق خاص - كينيا - سريلانكا - الفلبين - اوغندا | معتمد من مساند" />
<meta property="og:site_name" content="ساعد  للاستقدام" /> <!-- title -->
<title>ساعد | أفضل شركة استقدام عمالة منزلية بالسعودية </title> <!-- favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/images/logo/WhatsApp Image 2023-12-11 at 13.51.27_8a0b1f49.jpg">


<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WXKR56N9');
</script>
<!-- End Google Tag Manager -->

<script>
    var botmanWidget = {
        aboutText: 'شركة ساعد للاستقدام',
        introMessage: "مرحبا بكـ كيف يمكنني مساعدتك اليوم ؟",
        title: 'تواصل معنا',
        bubbleBackground: '#5B79AF',
        headerTextColor: '#fff',
        placeholderText: 'إكتب رسالتك هنا',
        aboutLink: 'https:\\mawtenrec.sa',

    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
<link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/bot.css') }}">

<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
<link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />

<style>
    #messageArea {
        overflow-y: scroll;
        background-color: whitesmoke !important;
    }
</style>

<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.rtl.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.rtl.min.css" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.min.css"
    integrity="sha512-W5OxdLWuf3G9SMWFKJLHLct/Ljy7CmSxaABQLV2WIfAQPQZyLSDW/bKrw71Nx7mZKN5zcL+r8pRCZw+5bIoHHw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- swiper -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.min.css" />
<!-- animate -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css" />
<!-- select2 -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/select2.min.css" />

<!-- img gallery -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery.fancybox.min.css" />
<!-- odometer -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/odometer.min.css" />
<!-- Custom style  -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
<link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />
{{-- here el mafrod nne2lha l style --}}
<style>
    * {
        font-family: 'Almarai', sans-serif !important;
        color: #34495e;

    }

    p,
    .count-content-title {
        font-weight: bold !important;

    }

    p {
        font-size: 20px !important;
    }

    .wow {
        visibility: hidden;
    }

    body {
        /* background-color: #ecf0f1 !important; */
        background: white;


    }


    .nav-link {
        font-weight: bold;
    }



    .navbar {
        margin: 0;
        padding: 10px;
    }

    .shadow {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .navbar-brand img {
        width: auto;
        height: 50px;
    }

    .p-s-l-55 {
        position: absolute;
        left: 55px;
    }



    .form-group label {
        margin-bottom: 5px;
    }


    .intro {
        margin: 35px;
        position: relative;
        left: 0;
        right: 0;
        margin: auto;
        justify-content: center;
        top: 65px;
        padding: 20px;
        border-radius: 25px;
    }


    .backgound-color-orange {
        background-color: #5B79AF;
        color: white !important;
    }

    .bg-blue {
        background-color: #5B79AF;
        color: white !important;
    }

    .bg-sky {
        background-color: #019B8F;
    }

    .bg-orange {
        background-color: #EC9A2E;
    }

    .bg-dark-blue {
        background-color: #004C63;
    }



    .color-white,
    .sliderTitle,
    .hint,
    .animatedLink {
        color: white !important;
    }


    canvas {
        overflow: hidden;
        position: absolute;
        opacity: .10;
    }

    .social-icons {
        position: fixed;
        z-index: 999999;
        width: 35px;
        background: #5B79AF;
        left: 0;
        top: 40%;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        text-align: center;
        padding-top: 10px;
    }

    .font-size-20 {
        font-size: 20px;
    }



    .border-radius {
        border-radius: 10px;
    }

    .view-all-btn {
        left: 20px;
        bottom: 0;

    }


    .steps {
        padding: 70px 0 30px;
    }

    .allSteps {
        display: flex;
        text-align: center;
        position: relative;

    }

    .step p {
        color: white !important;
        font-size: 16px;
    }

    @media (max-width: 678px) {
        .allSteps {
            flex-direction: column;
        }
    }

    .allSteps::before {
        content: "";
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ffffff;
        position: absolute;
        top: 50%;
        left: 0;
    }



    @media (max-width: 678px) {
        .allSteps::before {
            display: none;
        }

        .p-s-l-55 {
            position: inherit;
        }

        .pagination {
            display: block;
        }
    }

    .allSteps .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        height: 250px;
        width: 100%;
    }

    @media (max-width: 678px) {
        .allSteps .step {
            height: auto;
            padding-top: 70px;
            padding-bottom: 40px;
        }
    }

    .allSteps .step::after {
        content: "";
        width: 30px;
        height: 30px;
        border: 1px dashed #ffffff;
        background-color: #ffffff;
        border-radius: 100px;
        position: absolute;
        bottom: 0;
        left: 50%;
        z-index: 2;
        transform: translateX(-50%);
        display: flex;
        justify-content: center;
        align-items: center;
        color: #EC9A2E;
    }

    @media (max-width: 678px) {
        .allSteps .step::after {
            top: 0;
            bottom: unset;
        }
    }

    .allSteps .step:nth-child(1):after {
        content: "1";
    }

    .allSteps .step:nth-child(2):after {
        content: "2";
    }

    .allSteps .step:nth-child(3):after {
        content: "3";
    }

    .allSteps .step:nth-child(4):after {
        content: "4";
    }

    .allSteps .step:nth-child(5):after {
        content: "5";
    }

    .allSteps .step::before {
        content: "";
        width: 2px;
        height: 15px;
        border-left: 1px dashed #ffffff;
        border-radius: 100px;
        position: absolute;
        bottom: 30px;
        left: calc(50% + 1px);
        transform: translateX(-50%);
        z-index: 2;
    }

    @media (max-width: 678px) {
        .allSteps .step::before {
            top: -15px;
            height: 60px;
            bottom: unset;
        }
    }

    @media (max-width: 678px) {
        .allSteps .step:first-child::before {
            top: 0;
            height: 45px;
        }
    }

    .allSteps .step .images {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .allSteps .step .images img {
        -o-object-fit: contain;
        object-fit: contain;
        height: 30px;
        width: 45px;
        border-radius: 8px;
    }

    .allSteps .step .icon {
        position: relative;
        margin-bottom: 30px;
    }

    .allSteps .step .icon i {
        font-size: 40px;
        color: #ffffff;
    }

    .allSteps .step .icon::after {
        content: "";
        width: 80px;
        height: 50px;
        background-color: #ffffff;
        opacity: 0.1;
        position: absolute;
        left: calc(50% - 44px);
        top: 12px;
        transform: skewX(-55deg) rotateX(60deg) rotateY(14deg);
        z-index: -1;
    }

    .allSteps .step:nth-child(even) {
        margin-top: 220px;
        padding-bottom: 0px;
        padding-top: 60px;
    }

    @media (max-width: 678px) {
        .allSteps .step:nth-child(even) {
            margin-top: unset;
            padding-bottom: 30px;
            padding-top: 70px;
        }
    }

    .allSteps .step:nth-child(even)::after {
        bottom: unset;
        top: 0;
    }

    .allSteps .step:nth-child(even)::before {
        top: 30px;
        bottom: unset;
    }

    @media (max-width: 678px) {
        .allSteps .step:nth-child(even)::before {
            top: -15px;
        }
    }


    .selectCustomerService .choose {
        position: relative;
        display: flex;
        justify-content: space-around;
        background-color: rgba(25, 133, 135, 0.1254901961);
        padding: 20px;
        border-radius: 24px;
        flex-wrap: wrap;
        gap: 12px;
    }

    .selectCustomerService .choose .customerOption {
        flex: 1;
        min-width: 120px;
    }

    .selectCustomerService .choose .btn {
        padding: 15px 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1254901961);
        box-shadow: none;
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        height: 100%;
        position: relative;
        transition: all 0.3s ease-in-out;
        border: 4px solid transparent;
        border-radius: 16px;
        gap: 12px;
    }

    .selectCustomerService .choose .btn img {
        height: 87px;
        width: 87px;
    }

    .selectCustomerService .choose .btn span {
        text-align: center;
        font-size: 17px;
        color: #717171;
    }

    .selectCustomerService .choose .btn-check:active+.btn-outline {
        background-color: #ffffff;
        color: #00897e;
        border: 4px solid #00897e;
    }

    .selectCustomerService .choose .btn-check:active+.btn-outline::after {
        content: "\f560" !important;
        font-family: "Font Awesome 6 Pro";
        font-weight: bold;
        position: absolute;
        font-size: 20px;
        top: 5px;
        right: 10px;
    }

    .selectCustomerService .choose .btn-check:checked+.btn-outline {
        background-color: #ffffff;
        color: #00897e;
        border: 4px solid #00897e;
    }

    .selectCustomerService .choose .btn-check:checked+.btn-outline::after {
        content: "\f560" !important;
        font-family: "Font Awesome 6 Pro";
        font-weight: bold;
        position: absolute;
        font-size: 20px;
        top: 5px;
        right: 10px;
    }

    .selectCustomerService .choose .btn-outline.active {
        background-color: #ffffff;
        color: #00897e;
        border: 4px solid #00897e;
    }

    .selectCustomerService .choose .btn-outline.active::after {
        content: "\f560" !important;
        font-family: "Font Awesome 6 Pro";
        font-weight: bold;
        position: absolute;
        font-size: 20px;
        top: 5px;
        right: 10px;
    }

    .selectCustomerService .choose .btn-outline.dropdown-toggle.show {
        background-color: #ffffff;
        color: #00897e;
        border: 4px solid #00897e;
    }

    .selectCustomerService .choose .btn-outline.dropdown-toggle.show::after {
        content: "\f560" !important;
        font-family: "Font Awesome 6 Pro";
        font-weight: bold;
        position: absolute;
        font-size: 20px;
        top: 5px;
        right: 10px;
    }

    .selectCustomerService .choose .btn-outline:active {
        background-color: #ffffff;
        color: #00897e;
        border: 4px solid #00897e;
    }

    .selectCustomerService .choose .btn-outline:active::after {
        content: "\f560" !important;
        font-family: "Font Awesome 6 Pro";
        font-weight: bold;
        position: absolute;
        font-size: 20px;
        top: 5px;
        right: 10px;
    }

    .selectCustomerService .btn {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #019b8f;
        color: #fff;
    }

    .references {
        padding: 40px 0;
        background-image: linear-gradient(45deg, rgba(243, 228, 202, 0.1882352941), rgba(243, 228, 202, 0.3137254902)), url(../img/map.webp);
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .references .swiper-slide {
        width: auto;
    }

    .references .referenceLogo {
        height: 150px;
        padding: 10px 20px;
    }

    .references .referenceLogo img {
        height: 100%;
        width: 100%;
        -o-object-fit: contain;
        object-fit: contain;
    }

    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        /* Replace with your desired background color */
        z-index: 1000000;
    }

    .loader {
        position: absolute;
        top: 40%;
        left: 50%;
        width: 40px;
        height: 40px;

    }

    .pl {
        margin: auto;
        width: 8em;
        height: 8em;
    }

    .pl__line,
    .pl__line-g,
    .pl__lines {
        animation: lineRotate 2s ease-in-out infinite;
    }

    .pl__line {
        animation-name: lineMove;
        animation-timing-function: ease-in;
    }

    .pl__line-g {
        animation-name: lineFade;
        animation-timing-function: linear;
    }

    .pl__line-g:nth-child(2),
    .pl__line-g:nth-child(2) .pl__line {
        animation-delay: 0.1666666667s;
    }

    .pl__line-g:nth-child(3),
    .pl__line-g:nth-child(3) .pl__line {
        animation-delay: 0.25s;
    }

    .pl__line-g:nth-child(4),
    .pl__line-g:nth-child(4) .pl__line {
        animation-delay: 0.3333333333s;
    }

    .pl__line-g:nth-child(5),
    .pl__line-g:nth-child(5) .pl__line {
        animation-delay: 0.4166666667s;
    }

    .pl__line-g:nth-child(6),
    .pl__line-g:nth-child(6) .pl__line {
        animation-delay: 0.5s;
    }

    .pl__line-g:nth-child(7),
    .pl__line-g:nth-child(7) .pl__line {
        animation-delay: 0.5833333333s;
    }

    .pl__line-g:nth-child(8),
    .pl__line-g:nth-child(8) .pl__line {
        animation-delay: 0.6666666667s;
    }

    .pl__line-g:nth-child(9),
    .pl__line-g:nth-child(9) .pl__line {
        animation-delay: 0.75s;
    }

    .pl__line-g:nth-child(10),
    .pl__line-g:nth-child(10) .pl__line {
        animation-delay: 0.8333333333s;
    }

    .pl__line-g:nth-child(11),
    .pl__line-g:nth-child(11) .pl__line {
        animation-delay: 0.9166666667s;
    }

    .pl__line-g:nth-child(12),
    .pl__line-g:nth-child(12) .pl__line {
        animation-delay: 1s;
    }

    .pl__lines {
        transform-origin: 64px 64px;
    }

    .pl__layer .pl__lines {
        stroke: #f2c40d;
    }

    .pl__layer+.pl__layer .pl__lines {
        stroke: #f2520d;
    }

    /* Dark theme */
    @media (prefers-color-scheme: dark) {
        :root {
            --bg: hsl(var(--hue), 90%, 10%);
            --fg: hsl(var(--hue), 90%, 90%);
        }
    }

    /* Animations */
    @keyframes lineRotate {
        from {
            transform: rotate(0);
        }

        to {
            transform: rotate(0.5turn);
        }
    }

    @keyframes lineFade {

        from,
        50%,
        to {
            opacity: 0;
        }

        10%,
        45% {
            opacity: 1;
        }
    }

    @keyframes lineMove {
        from {
            stroke-dashoffset: -32;
        }

        50%,
        to {
            stroke-dashoffset: 32;
        }
    }

    .zsiq_custommain {
        display: none !important;
    }

    .btn-secondary {
        color: #fff;
        background-color: #5B79AF;
        border-color: #5B79AF;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5B79AF;
        border-color: #5B79AF;
    }

    .btn-outline-secondary {
        color: #5B79AF;
        border-color: #5B79AF;
    }

    .btn-outline-secondary:hover {
        color: white;
        background-color: #5B79AF;
        border-color: #5B79AF;
    }

    .sbuttons {
        bottom: 5%;
        position: fixed;
        margin: 1em;
        left: 0;
        z-index: 9999;
    }

    .sbutton {
        display: block;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        text-align: center;
        color: white;
        margin: 20px auto 0;
        box-shadow: 0px 5px 11px -2px rgba(0, 0, 0, 0.18), 0px 4px 12px -7px rgba(0, 0, 0, 0.15);
        cursor: pointer;
        -webkit-transition: all .1s ease-out;
        transition: all .1s ease-out;
        position: relative;
    }

    .sbutton>i {
        font-size: 38px;
        line-height: 60px;
        transition: all .2s ease-in-out;
        transition-delay: 2s;
    }

    .sbutton:active,
    .sbutton:focus,
    .sbutton:hover {
        box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
    }

    .sbutton:not(:last-child) {
        width: 60px;
        height: 60px;
        margin: 20px auto 0;
        opacity: 0;
    }

    .sbutton:not(:last-child)>i {
        font-size: 25px;
        line-height: 60px;
        transition: all .3s ease-in-out;
    }

    .sbuttons:hover .sbutton:not(:last-child) {
        opacity: 1;
        width: 60px;
        height: 60px;
        margin: 15px auto 0;
    }

    .sbutton:nth-last-child(1) {
        -webkit-transition-delay: 25ms;
        transition-delay: 25ms;
    }

    .sbutton:not(:last-child):nth-last-child(2) {
        -webkit-transition-delay: 20ms;
        transition-delay: 20ms;
    }

    .sbutton:not(:last-child):nth-last-child(3) {
        -webkit-transition-delay: 40ms;
        transition-delay: 40ms;
    }

    .sbutton:not(:last-child):nth-last-child(4) {
        -webkit-transition-delay: 60ms;
        transition-delay: 60ms;
    }

    .sbutton:not(:last-child):nth-last-child(5) {
        -webkit-transition-delay: 80ms;
        transition-delay: 80ms;
    }

    .sbutton:not(:last-child):nth-last-child(6) {
        -webkit-transition-delay: 100ms;
        transition-delay: 100ms;
    }

    [tooltip]:before {
        font-family: 'Roboto';
        font-weight: 600;
        border-radius: 2px;
        background-color: #5B79AF;
        color: #fff;
        content: attr(tooltip);
        font-size: 12px;
        visibility: hidden;
        opacity: 0;
        padding: 5px 7px;
        margin-left: 10px;
        position: absolute;
        left: 100%;
        bottom: 20%;
        white-space: nowrap;
    }

    [tooltip]:hover:before,
    [tooltip]:hover:after {
        visibility: visible;
        opacity: 1;
    }

    .sbutton.mainsbutton {
        background: #5B79AF;
    }

    .sbutton.gplus {
        background: #F44336;
    }

    .sbutton.pinteres {
        background: #e60023;
    }

    .sbutton.twitt {
        background: #03A9F4;
    }

    .sbutton.fb {
        background: #3F51B5;
    }

    .sbutton.whatsapp {
        background: #00e676;
    }
</style>




{{-- <meta name="facebook-domain-verification" content="xzriovd2wahlxglii9zvaqy6xbfv9c" /> --}}
