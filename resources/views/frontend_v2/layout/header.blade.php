<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>
    {{ $setting->title ?? ($settings->title ?? config('app.name')) }} - @yield('title')
</title>

<meta name="description"
    content="شركة ساعد للاستقدام من أبرز الشركات المتخصصة في المملكة العربية السعودية في تقديم خدمات توفير العمالة المنزلية الماهرة من كافة الدول المصرح بها وفق منهجية و رؤية متكاملة توفر للعميل كافة الخدمات التي يرغبها في وقت وجيز .">
<meta name="keywords"
    content="مكتب استقدام,استقدام سائق خاص,استقدام عماله منزليه,مكتب استقدام الرياض,مكتب استقدام جدة,مكتب استقدام عماله منزلية,مكتب استقدام سائق,خدمات الاستقدام,روافد للاستقدام,مواقع مكاتب الاستقدام,مساند مكاتب استقدام,مساند للاستقدام,استقدام عاملة منزلية,استقدام الرياض,منصة مساند,ارخص مكتب استقدام,افضل مكتب استقدام,تقديم شغالات,استقدام عامل منزلي,اقرب مكتب استقدام من موقعي,اسعار تقديم الخادمات,شروط استقدام سائق خاص,شروط استقدام عامل منزلي,شروط الاستقدام,مكاتب الاستقدام المعتمدة,مكاتب الاستقدام المعتمدة من وزارة العمل,مكتب استقدام سائق خاص,مكاتب استقدام من الفلبين بالرياض,اسعار استقدام العاملات المنزلية,أفضل مكتب استقدام في الرياض,مكتب استقدام شمال الرياض,استقدام خادمة سيرلانكية,مكتب استقدام كينيا الرياض,مكاتب استقدام فلبينيات بالرياض,مكتب العقيل للإستقدام,مكتب العقيل للاستقدام,مكتب العقيل,العقيل,مساند,استخراج تاشيرة من مساند,أسعار الاستقدام من بنجلاديش 2021,للاستقدام,شروط استقدام عاملة منزلية مساند,استخراج تاشيرة عاملة منزلية,أسعار الاستقدام من الفلبين 2025">
<link rel="canonical" href="{{ request()->url() }}">

<meta property="og:title" content="{{ $setting->title ?? ($settings->title ?? config('app.name')) }}">
<meta property="og:image" content="{{ get_file($settings->header_logo) }}">
<meta property="og:image:secure_url" content="{{ get_file($settings->header_logo) }}" />
<meta property="og:image:type" content="jpg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('twitter_title', $settings->title ?? ($setting->title ?? ''))">
<meta name="twitter:description"
    content="شركة ساعد للاستقدام من أبرز الشركات المتخصصة في المملكة العربية السعودية في تقديم خدمات توفير العمالة المنزلية الماهرة من كافة الدول المصرح بها وفق منهجية و رؤية متكاملة توفر للعميل كافة الخدمات التي يرغبها في وقت وجيز .">
<meta name="twitter:image" content="@yield('twitter_image', get_file($settings->header_logo) ?? asset('frontend') . '/img/logo/logoH.svg')">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "url": "{{ url('/') }}",
    "name": "{{ $settings->title ?? $setting->title ?? config('app.name') }}",
    "logo": "{{ get_file($settings->header_logo) ?? asset('frontend') . '/img/logo/logoH.svg' }}"
}
</script>


<!-- favicon -->
<link rel="icon" type="image/x-icon" href="{{ get_file($settings->header_logo) }}">





<!-- Core styles -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
<link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />

<style>
    #messageArea {
        overflow-y: scroll;
        background-color: whitesmoke !important;
    }
</style>

<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.rtl.min.css">

<!-- Fonts (single include) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700&family=Almarai:wght@300&display=swap"
    rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- Bootstrap RTL -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.rtl.min.css" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.min.css"
    integrity="sha512-W5OxdLWuf3G9SMWFKJLHLct/Ljy7CmSxaABQLV2WIfAQPQZyLSDW/bKrw71Nx7mZKN5zcL+r8pRCZw+5bIoHHw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- swiper -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.min.css" />
<!-- animate -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css" />
<!-- img gallery -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery.fancybox.min.css" />
<!-- odometer -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/odometer.min.css" />
<!-- Custom style  -->

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
<!-- (removed duplicate core CSS includes) -->
{{-- here el mafrod nne2lha l style --}}


<style>
    .fancybox__container {
        z-index: 99999 !important;
    }
</style>


{{-- <meta name="facebook-domain-verification" content="xzriovd2wahlxglii9zvaqy6xbfv9c" /> --}}
