 <section class="Countries-section" id="Countries">
     <div class="container-fluid">
         <div class="SectionTitle">
             <div class="title">
                 <h6> خدمة العملاء </h6>
             </div>
             <h2 class="hint"> يمكنك الان التواصل مع خدمة العملاء لسهولة طلب الخدمة</h2>
         </div>
         <div class="Countries-boxes">
             <div class="row">
                 @foreach ($customerServices as $key => $customerService)
                     <div class="col-lg-3 col-md-6">
                         <div class="Countries-block">
                             <div class="Countries-media">
                                 <div> <img src="{{ get_file($customerService->image) }}" alt="" /></div>
                             </div>
                             <div class="Countries-content">
                                 <div class="count-content-title">{{ $customerService->name }}</div>
                                 <p> يمكنك التواصل الان عبر الخيارات الاتية </p>
                                 <a href="https://wa.me/+966{{ $customerService->whats_up_number }}" target="_blank"
                                     class="defaultBtn">
                                     <i class="fab fa-whatsapp"></i>

                                 </a>
                                 <a href="tel:0{{ $customerService->phone }}" class="defaultBtn">
                                     <i class="fas fa-phone"></i>
                                 </a>

                             </div>
                         </div>
                     </div>
                     @if ($key == 3 or $key == 7 or $key == 15)
                         <div class="col-lg-3"></div>
                     @endif
                 @endforeach

             </div>
         </div>

     </div>

 </section>
