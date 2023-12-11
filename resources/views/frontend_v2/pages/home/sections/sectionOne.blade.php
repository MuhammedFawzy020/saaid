 <div class="border-r-0  image-overlay">
     <section class="section_one wow animated fadeIn">
         <section class="mainSlider">
             <div class="swiper mainSliderContainer ">
                 <div class="swiper-wrapper">
                     <!-- swiper-slide -->
                     <div class="swiper-slide" style="background-image:url({{ asset('frontend') }}/images/s1.webp)">
                         <div class=" info">
                             <h4 class="hint">{{ $setting->title }}</h4>
                             <h1 class="sliderTitle"> {{ $setting->header_desc }} </h1>
                             <div class="btns">
                                 <a href="{{ route('all-workers') }}" class="btn"> طلب استقدام </a>
                                 <a href="{{ route('track_order_view') }}" class="btn btn-outline-secondary"> تتبع طلبك
                                 </a>

                             </div>
                         </div>
                     </div>
                     <!-- swiper-slide -->
                     <div class="swiper-slide" style="background-image:url({{ asset('frontend') }}/images/s2.webp)">
                         <div class=" info">
                             <h4 class="hint"> توفر ساعد </h4>
                             <h1 class="sliderTitle"> ايدي عاملة مميزة ومدربة بحرفية </h1>
                             <div class="btns">
                                 <a href="{{ route('all-workers') }}" class="btn"> طلب استقدام </a>
                                 <a href="{{ route('track_order_view') }}" class="btn btn-outline-secondary"> تتبع طلبك
                                 </a>
                             </div>
                         </div>
                     </div>
                     <!-- swiper-slide -->
                     <div class="swiper-slide" style="background-image:url({{ asset('frontend') }}/images/s3.webp)">
                         <div class=" info">
                             <h4 class="hint"> نقدم أفضل خدمات </h4>
                             <h1 class="sliderTitle"> استقدام سريع بأسعار تنافسية </h1>
                             <div class="btns">
                                 <a href="{{ route('all-workers') }}" class="btn"> طلب استقدام </a>
                                 <a href="{{ route('track_order_view') }}" class="btn btn-outline-secondary"> تتبع طلبك
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </section>
     </section>
 </div>
