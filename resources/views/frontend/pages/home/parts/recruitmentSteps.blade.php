<section class="steps" id="steps">
    <div class="container">
        <!-- Section Title -->
        <div class="SectionTitle">
            <h2 class="title">{{__('frontend.Recruitment steps')}}</h2>
            <h6 class="hint">{{$settings->recruitment_step_desc??"تعرف علي الخطوات التي نعمل بها ..."}}</h6>
        </div>
        <!-- steps -->
        <div class="allSteps">
            <div class="step wow fadeInUp">
                <div class="icon">
                    <i class="fa-thin fa-wallet"></i>
                </div>
                <p>{{$settings->recruitment_step1_desc??" سداد رسوم تاشيرة العمالة المنزلية الخاصة بك عبر الخدمات الحكومية
                    في البنك او عن طريق القنوات التالية"}}

                <div class="images">
                    <img src="{{asset('frontend')}}/img/mc.webp">
                    <img src="{{asset('frontend')}}/img/visa.webp">
                    <img src="{{asset('frontend')}}/img/mada.webp">
                </div>
                </p>
            </div>
            <div class="step wow fadeInUp">
                <div class="icon">
                    <i class="fa-thin fa-passport"></i>
                </div>
                <p>{{$settings->recruitment_step2_desc??" طلب اصدار تاشيرة العمالة المنزلية الخاصة بك في برنامج مساند"}}</p>
            </div>
            <div class="step wow fadeInUp">
                <div class="icon">
                    <i class="fa-thin fa-id-card"></i>
                </div>
                <p>{{$settings->recruitment_step3_desc??"اختيار السيرة الذاتية للعمالة المنزلية عبر البحث في برنامج مساند
                    عن طريق المهنة/ الجنسية "}}</p>

            </div>
            <div class="step wow fadeInUp">
                <div class="icon">
                    <i class="fa-thin fa-wallet"></i>
                </div>
                <p>{{$settings->recruitment_step4_desc??"دفع مبلغ اختياري وتوثيق طلب استقدام العمالة المنزلية المحددة بعد
                    اختيار السيرة الذاتية "}}</p>

            </div>
            <div class="step wow fadeInUp">
                <div class="icon">
                    <i class="fa-thin fa-plane"></i>
                </div>
                <p>{{$settings->recruitment_step5_desc??" وصول العمالة المنزلية من المطار المحلي الى المكتب"}}</p>
            </div>

{{--            <div class="step wow fadeInUp">--}}
{{--                <div class="icon">--}}
{{--                    <i class="fa-thin fa-handshake"></i>--}}
{{--                </div>--}}
{{--                <p>{{$settings->recruitment_step6_desc??""}}</p>--}}
{{--            </div>--}}

        </div>
    </div>
</section>
