<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('frontend')}}/img/logo/logoH.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}"> {{__('frontend.Home')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.show.services')}}">  {{__('frontend.OurServices')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.show.countries')}}"> {{__('frontend.Recruitment countries')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('track_order_view')}}"> {{__('frontend.Track your order')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.show.faq')}}"> {{__('frontend.Common questions')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.show.contactUs')}}">{{__('frontend.contactUs')}}</a>
                    </li>
                    @auth()
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.profile')}}"> {{__('frontend.profile')}} </a>
                        </li>
                    @endauth
                    @guest()
                        <li class="nav-item ">
                            <a href="{{route('auth.login')}}" class="nav-link">{{__('frontend.Login')}} </a>
                        </li>
                    @endguest

                    <li class="nav-item ms-lg-auto">
                        <a href="{{route('all-workers')}}" class="defaultBtn"> طلب الاستقدام </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

</header>
