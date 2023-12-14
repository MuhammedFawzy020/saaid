@if (count($statistics) == 4)
    <section class="statistics">
        <div class="container">
            <div class="text-center">
                <h1 class="display-1">
                    ـــ {{ __('frontend.statistics') }}
                </h1>
                <p class="text-muted">
                    {{ $settings->our_statistics_desc }}
                </p>
            </div>
            <br />
            <div class="row  statisticsInner">
                <div class="circleBlur"></div>
                <div class="circleBlur2"></div>
                @foreach ($statistics as $statistic)
                    <div class="col-6 col-md-3 p-2">
                        <div class="specifications wow fadeInUp">
                            <h1 class="odometer" data-count="{{ $statistic->number }}">00</h1>
                            <h6> {{ $statistic->title }} </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <section class="statistics">
        <div class="container">
            <div class="text-right">
                <h1 class="display-1">
                    ـــ {{ __('frontend.statistics') }}
                </h1>
                <p class="text-muted">
                    {{ $settings->our_statistics_desc }}
                </p>
            </div>
            <br />
            <div class="row  statisticsInner">
                <div class="circleBlur"></div>
                <div class="circleBlur2"></div>
                <div class="col-6 col-md-3 p-2">
                    <div class="specifications wow fadeInUp">

                        <h1 class="odometer" data-count="5146">00</h1>
                        <h6> عملائنا </h6>
                    </div>
                </div>
                <div class="col-6 col-md-3 p-2">
                    <div class="specifications wow fadeInUp">

                        <h1 class="odometer" data-count="8000">00</h1>
                        <h6> زوارنا </h6>
                    </div>
                </div>
                <div class="col-6 col-md-3 p-2">
                    <div class="specifications wow fadeInUp">

                        <h1 class="odometer" data-count="100">00</h1>
                        <h6> خدمة العملاء </h6>
                    </div>
                </div>
                <div class="col-6 col-md-3 p-2">
                    <div class="specifications wow fadeInUp">

                        <h1 class="odometer" data-count="10000">00</h1>
                        <h6> عامل وعاملة </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
