<section class="references">
    <div class="container">
        <div class="swiper referencesSlider ">
            <div class="swiper-wrapper">

                @foreach ($sponsors as $sponsor)
                    <div class="swiper-slide">
                        <div class="referenceLogo ">
                            <img src="{{ get_file($sponsor->image) }}" alt="{{ $sponsor->title ?? 'راعي' }}">
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
