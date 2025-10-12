<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>
    {{ $setting->title ?? ($settings->title ?? config('app.name')) }} - @yield('title')
</title>

<meta name="description" content="@yield('meta_description', $settings->description ?? ($setting->description ?? ''))">
<meta name="keywords" content="@yield('meta_keywords', $settings->keywords ?? ($setting->keywords ?? ''))">
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
<meta name="twitter:description" content="@yield('twitter_description', $settings->description ?? ($setting->description ?? ''))">
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


<style>
    .fancybox__container {
        z-index: 99999 !important;
    }
</style>


{{-- <meta name="facebook-domain-verification" content="xzriovd2wahlxglii9zvaqy6xbfv9c" /> --}}
