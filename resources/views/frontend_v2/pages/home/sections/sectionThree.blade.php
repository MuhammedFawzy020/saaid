<div class="container-fluid">
    <div class="text-center">
        <h1 class="display-1">
            خدماتنا
        </h1>
        <p class="text-muted">
            تعرف علي الخدمات التي نقدمها لعملائنا...
        </p>
    </div>
    <div class="wt-separator-two-part">

    </div>
    <div class="Services-boxes">
        <div class="job-categories-style1 m-b30">
            <div class="owl-carousel Service-carousel owl-btn-left-bottom row">
                <!-- COLUMNS 1 -->


                @foreach ($ourServices->take(3) as $key => $service)
                    <!-- slide -->

                    <div class="item col-md-4">
                        <div class="job-categories-block">
                            <div class="twm-media">
                                <div class="flaticon-dashboard">
                                    @if ($key == 0)
                                        <i class='bx bxs-plane-alt me-2'></i>
                                    @elseif($key == 1)
                                        <i class='bx bx-briefcase me-2'></i>
                                    @elseif($key == 2)
                                        <i class='bx bxs-user-detail me-2'></i>
                                    @elseif($key == 3)
                                        <i class='bx bx-id-card me-2'></i>
                                    @else
                                        <i class='bx bx-file-blank me-2'></i>
                                    @endif
                                </div>
                            </div>
                            <div class="twm-content">
                                <div class="twm-jobs-available"> {{ $service->title }}</div>
                                <p> {{ $service->desc }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-end job-categories-btn">
                <a href="{{ route('frontend.show.services') }}" class="btn btn-secondary"> كل الخدمات </a>
            </div>
        </div>
    </div>
</div>
