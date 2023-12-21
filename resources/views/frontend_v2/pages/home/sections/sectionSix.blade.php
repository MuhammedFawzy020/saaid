 <section class="Countries-section" id="Countries">
     <div class="container-fluid">
         <div class="text-center">
             <h1 class="display-1">
                 خدمة العملاء
             </h1>
             <p class="text-muted">
                 يمكنك الان التواصل مع خدمة العملاء في اي وقت
             </p>
         </div>
         <br />
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
                                     <i class="bx bxl-whatsapp"></i>

                                 </a>
                                 <a href="tel:0{{ $customerService->phone }}" class="defaultBtn">
                                     <i class="bx bx-phone"></i>
                                 </a>

                             </div>
                         </div>
                     </div>
                 @endforeach

             </div>
         </div>

     </div>

 </section>
