 @extends('frontend_v2.layout.app')
 @section('title')
     دول الاستقدام
 @endsection
 @section('keywords')
     <meta name="keywords"
         content="دول الاستقدام,اثيوبيا,الهند,ارخص دولة استقدام,عمالة من الهند,عمالة من سيريلانكا,وافد جديد,الفلبين,بنجلادش,كينيا,اوغندا,سبق لهم العمل">
 @endsection
 @section('content')
     <!-- INNER PAGE BANNER -->
     <div class=" overlay-wraper page-banner">
         <div class="overlay-main"></div>
         <div class="container">
             <div class="banner-content">
                 <div class="banner-title">
                     <div class="banner-title-name">
                         <h2> دول الاستقدام </h2>
                     </div>
                 </div>
                 <div>
                     <ul class="page-breadcrump list-unstyled">
                         <li><a href="{{ route('home') }}">الرئيسية</a></li>
                         <li> دول الاستقدام </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- =============================== Countries ========================================== -->
     <section class="Countries-section" id="Countries">
         <div class="container-fluid">
             <div class="Countries-title">
                 <div class="Countries-title-heading">
                     <h6> دول الاستقدام </h6>
                 </div>
                 <h2> اختيار الدولة التي تتم عملية الاستقدام منها</h2>
             </div>
             <div class="Countries-boxes">
                 <div class="row">
                     @foreach ($countries as $key => $country)
                         <div class="col-lg-3 col-md-6">
                             <div class="Countries-block">
                                 <div class="Countries-media">
                                     <div> <img src="{{ get_file($country->image) }}" alt="علم {{ $country->title }}" />
                                     </div>
                                 </div>
                                 <div class="Countries-content">
                                     <div class="count-content-title">{{ $country->title }}</div>
                                     <p>{{ $country->price?->price }} ريال سعودي </p>
                                     <a href="{{ route('all-workers', ['nationality' => $country->id]) }}"
                                         class="defaultBtn"> اطلب
                                         الآن </a>
                                 </div>
                             </div>
                         </div>
                         @if ($key == 3 or $key == 7 or $key == 15)
                             <div class="col-lg-2"></div>
                         @endif
                     @endforeach

                 </div>
             </div>

         </div>

     </section>
 @endsection
