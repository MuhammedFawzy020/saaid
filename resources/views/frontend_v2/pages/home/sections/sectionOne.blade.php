 <div class="border-r-0  image-overlay">
     <section class="section_one wow animated fadeIn">
         <section class="mainSlider">
             <div class="swiper mainSliderContainer ">
                 <div class="swiper-wrapper">
                     <!-- swiper-slide -->
                     @foreach ($sliders as $slider)
                         <div class="swiper-slide" style="background-image:url({{ get_file($slider->image) }})">
                             <div class=" info">
                                 <h4 class="hint">{{ $slider->title }}</h4>
                                 <h1 class="sliderTitle"> {{ $slider->desc }} </h1>
                                 <div class="btns">
                                     <a href="{{ route('all-workers') }}" class="btn"> طلب استقدام </a>
                                     <a href="{{ url('/all-workers/admission/rental') }}" class="btn"> طلب إيجار </a>
                                     <a href="{{ route('track_order_view') }}" class="btn btn-outline-secondary"> تتبع
                                         طلبك
                                     </a>

                                 </div>
                             </div>
                         </div>
                     @endforeach

                 </div>
             </div>

         </section>
     </section>
 </div>
