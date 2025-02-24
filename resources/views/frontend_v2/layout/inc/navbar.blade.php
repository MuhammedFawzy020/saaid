<header>
    <div class="bg-blue" style="background-color:#B9AE80">
        <div class="container-fluid p-2">
            <div class="row m-0 p-0">
                <div class="col-md-6">
                    <p class="text-white m-0" style="font-size:16px !important;">
                        <i class="bx bx-map-pin text-white"></i> {{ $setting->address1 }}
                    </p>
                </div>
                <div class="col-md-6 text-end text-white">

                    <a href="{{ $setting->twitter }}" class="text-decoration-none">
                        <i class="bx bxl-twitter color-white font-size-20"></i>
                    </a>
                    |
                    <a href="{{ $setting->youtube }}" class="text-decoration-none">
                        <i class="bx bxl-youtube color-white font-size-20"></i>
                    </a>
                    |
                    <a href="{{ $setting->tiktok }}" class="text-decoration-none">
                        <i class="bx bxl-tiktok color-white font-size-20"></i>
                    </a>
                    |
                    <a href="{{ $setting->snapchat_ghost }}" class="text-decoration-none ">
                        <i class="bx bxl-snapchat color-white font-size-20"></i>
                    </a>
                    |
                    <a href="{{ $setting->instagram }}" class="text-decoration-none ">
                        <i class="bx bxl-instagram color-white font-size-20"></i>
                    </a>



                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ get_file($settings->header_logo) }}" style="width:auto; height:75px;" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-s-l-55" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"> {{ __('frontend.Home') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('all-workers') }}">
                            طلب الاستقدام </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('all-workers', ['value' => 'rental', 'type' => 'admission']) }}">
                            طلب الايجار </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}">
                            {{ __('frontend.OurServices') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/countries') }}">
                            {{ __('frontend.Recruitment countries') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('track_order_view') }}">
                            {{ __('frontend.Track your order') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact-us') }}">{{ __('frontend.contactUs') }}</a>
                    </li>





                </ul>
            </div>
        </div>
    </nav>

</header>
