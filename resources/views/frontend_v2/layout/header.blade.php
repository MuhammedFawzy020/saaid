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
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
<link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />
{{-- here el mafrod nne2lha l style --}}





{{-- <meta name="facebook-domain-verification" content="xzriovd2wahlxglii9zvaqy6xbfv9c" /> --}}
