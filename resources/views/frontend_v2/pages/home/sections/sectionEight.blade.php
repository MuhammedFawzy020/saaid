<!--================================ Contact-us ==========================================  -->


<div class="Contact-section">
    <div class="overlay-main "></div>
    <div class="container-fluid">
        <div class="text-center mb-4">
            <h1 class="display-4">
                تواصل معنا
            </h1>
            <p class="text-muted">
                يمكنك الان تواصل معنا علي مدار 24 ساعة
            </p>
        </div>
        <div class="section-content">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="Contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3622.1268069399935!2d{{ $setting->longitude }}!3d{{ $setting->latitude }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDQ3JzI4LjAiTiA0NsKwNDYnMDIuNSJF!5e0!3m2!1sen!2ssa!4v1701704321392!5m2!1sen!2ssa"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <h5>يمكنك اجادنا عبر جميع الوسائل </h5>
                    <p class="mb-30" style="margin-bottom:40px;">الساعد للاستقدام معاك اينما كنت , يمكنك التواصل معنا
                        عبر جميع الوسائل او زيارة موقعنا </p>
                    <div class="contact-link">
                        <div class="contact-link-icon"> <span><i class="bx bx-phone" style="color:white"></i></span>
                        </div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">اتصل بنا </div>
                            <div class="contact-link-text">{{ $setting->phone1 }} - {{ $setting->phone2 }} -
                                {{ $setting->phone2 }}</div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"> <span><i class="bx bxl-whatsapp" style="color:white"></i>
                            </span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">واتس اب</div>
                            <div class="contact-link-text">
                                <a href="https://wa.me/{{ $setting->phone3 }}">
                                    {{ $setting->phone3 }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"> <span><i class="bx bxl-gmail" style="color:white"></i> </span>
                        </div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">البريد الالكتروني</div>
                            <div class="contact-link-text">{{ $setting->email1 }} - {{ $setting->email2 }}</div>

                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"> <span><i class="bx bx-pin" style="color:white"></i> </span>
                        </div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">زيارة مكتبنا</div>
                            <div class="contact-link-text">{{ $setting->address1 }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
