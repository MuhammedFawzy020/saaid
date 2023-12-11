
<div class="container">
    <footer class="py-3 my-4">
{{--        <a   href="https://api.whatsapp.com/send?phone={{$settings->phone2}}" target="_blank">--}}
{{--            <div  class="container-wa">--}}

{{--                <div  class="floating-button">--}}

{{--                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">--}}

{{--                    <i class="fa fa-whatsapp icon wa"></i>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <a href="tel:{{$settings->phone3}}" target="_blank">--}}
{{--            <div class="container-call">--}}

{{--                <div class="floating-button">--}}

{{--                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">--}}

{{--                    <i class="fa-regular fa-phone"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}


        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="{{route('home')}}"> الرئيسية </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="{{route('frontend.show.services')}}"> خدماتنا </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="{{route('frontend.show.countries')}}"> دول الاستقدام </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="{{route('track_order_view')}}"> تتبع طلبك </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="{{route('frontend.show.faq')}}"> الاسئلة الشائعة </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="{{route('frontend.show.contactUs')}}"> تواصل معنا </a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link px-2 text-muted" href="{{route('auth.profile')}}"> حسابي </a>
            </li>
            @endauth
            @guest
            <li class="nav-item ">
                <a class="nav-link px-2 text-muted" href="{{route('auth.login')}}"> تسجيل دخول </a>
            </li>
            @endguest

        </ul>
        <p class="text-center text-muted"> كل الحقوق محفوظة موطن للاستقدام © 2023</p>
    </footer>
</div>
