@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Visa issuance')}}
@endsection

@section('styles')
    <style>
    </style>
@endsection


@section('content')


    <!-- INNER PAGE BANNER -->
    <div class=" overlay-wraper page-banner">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="banner-content">
                <div class="banner-title">
                    <div class="banner-title-name">
                        <h2> إصدار التأشيرة </h2>
                    </div>
                </div>
                <div>
                    <ul class="page-breadcrump list-unstyled">
                        <li><a href="{{route('home')}}">الرئيسية</a></li>
                        <li> إصدار التأشيرة </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->


    <section class="recruitmentVisa">
        <div class="container">
            <div class="row">
                <!-- tabs -->
                <div class="col-md-12 col-lg-12">
                    <div class="recruit-tab nav" role="tablist">
                        <button class="nav-link active" id="newAccount-tab" data-bs-toggle="pill"
                                data-bs-target="#newAccount">
                            <i class="fa-solid fa-user-plus"></i>
                            <p> مستخدم جديد على موقع مساند </p>
                        </button>
                        <button class="nav-link" id="haveAccount-tab" data-bs-toggle="pill"
                                data-bs-target="#haveAccount">
                            <i class="fa-solid fa-user-check"></i>
                            <p> لدي حساب بالفعل على موقع مساند</p>
                        </button>
                    </div>
                    <div class=" tab-content">
                        <!-- new account -->
                        <div class="tab-pane fade show active" id="newAccount">

                            <h4 class=" secondaryTitle"> لتقديم طلب للحصول على تأشيرة الإستقدام يرجى اتباع الخطوات  التالية</h4>
                            <h6 class="thirdTitle"> زيارة موقع مساند الإلكتروني على الرابط التالي
                                <a href="https://musaned.com.sa" target="_Blank">
                                    musaned.com.sa </a>
                            </h6>
                            <div class="step">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#num1">
                                            تسجيل حساب جديد
                                        </button>
                                        <div id="num1" class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                <div class="info">
                                                    <p> سوف يتم التحقق من رقم الهوية من خلال (أبشر) خدمات وزارة الداخلية، لذا يجب التأكد  من التسجيل بخدمات أبشر مسبقاً وللمزيد من التفاصيل يمكنك زيارة خدمات أبشر موقع وزارة الداخلية   </p>
                                                </div>
                                                <!-- single step -->
                                                <h4 class="secondaryTitle">تعبئة نموذج تسجيل المعلومات الأساسية  </h4>
                                                <ul>
                                                    <li>رقم الهوية الوطنية للمواطنين أو الإقامة للمقيمين</li>
                                                    <li>الإسم الأول و اسم العائلة</li>
                                                    <li>تاريخ الميلاد (هجري)</li>
                                                    <li>رقم الجوال</li>
                                                    <li>المدينة</li>
                                                </ul>
                                                <div class="info">
                                                    <p> بعد تسجيل المعلومات الأساسية ستصلك رسالة نصية على جوالك تحتوي على رمز تفعيل
                                                        مساند. أدخل “رمز
                                                        التفعيل” لتعبئة النموذج لتسجيل حساب في مساند </p>
                                                </div>
                                                <div class="secondaryTitle">تعبئة نموذج تسجيل المعلومات الأساسية</div>
                                                <ul>
                                                    <li>تأكيد كلمة المرور: إعادة كلمة المرور المختارة</li>
                                                    <li>رقم الجوال: رقم جوال مسجل في أبشر</li>
                                                    <li>البريد الإلكتروني: لتفعيل حساب مساند</li>
                                                </ul>
                                                <div class="info">
                                                    <p> كلمة المرور: اختر كلمة مرور تحتوي على حروف وأرقام ورموز </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="requirement">
                                    <h4 class="secondaryTitle"> قبل البدأ في اصدار التأشيرة يجب التأكد من جاهزية المتطلبات
                                        التالية : </h4>
                                    <ul>
                                        <li>هل أنت مسجل في المؤسسة العامة التأمينات الإجتماعية؟</li>
                                        <li>الحالة الوظيفية: حسب الإثبات للمقدرة المالية</li>
                                        <li>نوع إثبات المقدرة المالية: تعريف بالراتب من القطاع الخاص أو الحكومي، أوكشف حساب
                                            البنك حسب عدد
                                            التأشيرات المسموحة
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- step -->
                            <div class="step">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#num2">
                                            طريقة سداد رسوم التأشيرة عن طريق خدمة سداد
                                        </button>
                                        <div id="num2" class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>الدخول الى موقع او تطبيق البنك او الصراف الالى</li>
                                                    <li>"اختيار "المدفوعات</li>
                                                    <li>"اختيار "المدفوعات الحكومية -سداد</li>
                                                    <li>"نوع "الخدمة الإستقدام</li>
                                                    <li>"الطلب "تأشيرة عمالة</li>
                                                    <li>"نوع العملية" دفع</li>
                                                    <li>إدخال رقم هوية صاحب العمل</li>
                                                    <li>تحديد عدد التأشيرات المراده</li>
                                                    <li>تسديد رسوم التأشيرة</li>
                                                </ul>
                                                <div class="info">
                                                    <p> إصدار الفاتورة لرسوم التأشيرة عن طريق (سداد) ودفع المبلغ خلال يوم واحد ليتم
                                                        إرسال الطلب </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- step -->
                            <div class="step">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#num3">
                                            طلب إصدار التأشيرة
                                        </button>
                                        <div id="num3" class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                <div class="secondaryTitle"> تعبئة بيانات التأشيرة</div>
                                                <ul>
                                                    <li>المهنة: قم بإختيار المهنة للعمالة المنزلية</li>
                                                    <li>الجنسية: قم بإختيار الجنسية للعمالة المنزلية</li>
                                                    <li>جهة القدوم: قم بإختيار جهة القدوم حسب الدولة</li>
                                                </ul>
                                                <div class="secondaryTitle"> إثبات المقدرة المالية</div>
                                                <ul>
                                                    <li>تعريف الراتب: قم بإدخال القيمة للراتب الشهري من القطاع الخاص أو الحكومي</li>
                                                    <li>شهادة بنكية: قم بإدخال القيمة لمتوسط الحساب الشهري من الشهادة البنكية</li>
                                                </ul>
                                                <div class="secondaryTitle"> رفع الوثائق والمرفقات</div>
                                                <ul>
                                                    <li>إثبات المقدرة المالية</li>
                                                    <li>صورة سجل الأسرة أو الهوية الوطنية</li>
                                                </ul>
                                                <div class="info">
                                                    <p> الموافقة على التعهد والإقرار على سياسة الخصوصية والشروط والأحكام </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="secondaryTitle text-center">
                                في حال تم الإرسال سيتم ابلاغك بحالة الطلب خلال يوم عمل واحد عبر رقم الجوال والبريد
                                الإلكتروني
                            </h5>

                        </div>
                        <!-- have account -->
                        <div class="tab-pane fade" id="haveAccount">
                            <h4 class=" secondaryTitle"> لتقديم طلب للحصول على تأشيرة الإستقدام يرجى اتباع الخطوات
                                التالية </h4>
                            <h6 class="thirdTitle"> زيارة موقع مساند الإلكتروني على الرابط التالي
                                <a href="https://musaned.com.sa" target="_Blank">
                                    musaned.com.sa </a>
                            </h6>
                            <!-- requirement -->
                            <div class="requirement">
                                <h4 class="secondaryTitle"> قبل البدأ في اصدار التأشيرة يجب التأكد من جاهزية المتطلبات
                                    التالية : </h4>
                                <ul>
                                    <li>هل أنت مسجل في المؤسسة العامة التأمينات الإجتماعية؟</li>
                                    <li>الحالة الوظيفية: حسب الإثبات للمقدرة المالية</li>
                                    <li>نوع إثبات المقدرة المالية: تعريف بالراتب من القطاع الخاص أو الحكومي، أوكشف حساب
                                        البنك حسب عدد
                                        التأشيرات المسموحة
                                    </li>
                                </ul>

                            </div>

                            <!-- step -->
                            <div class="step">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#num4">
                                            طريقة سداد رسوم التأشيرة عن طريق خدمة سداد
                                        </button>
                                        <div id="num4" class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>الدخول الى موقع او تطبيق البنك او الصراف الالى</li>
                                                    <li>"اختيار "المدفوعات</li>
                                                    <li>"اختيار "المدفوعات الحكومية -سداد</li>
                                                    <li>"نوع "الخدمة الإستقدام</li>
                                                    <li>"الطلب "تأشيرة عمالة</li>
                                                    <li>"نوع العملية" دفع</li>
                                                    <li>إدخال رقم هوية صاحب العمل</li>
                                                    <li>تحديد عدد التأشيرات المراده</li>
                                                    <li>تسديد رسوم التأشيرة</li>
                                                </ul>
                                                <div class="info">
                                                    <p> إصدار الفاتورة لرسوم التأشيرة عن طريق (سداد) ودفع المبلغ خلال يوم واحد ليتم
                                                        إرسال الطلب </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- step -->
                            <div class="step">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#num5">
                                            طلب إصدار التأشيرة
                                        </button>
                                        <div id="num5" class="accordion-collapse collapse show" data-bs-parent="#sf-faq-accordion">
                                            <div class="accordion-body">
                                                <div class="secondaryTitle"> تعبئة بيانات التأشيرة</div>
                                                <ul>
                                                    <li>المهنة: قم بإختيار المهنة للعمالة المنزلية</li>
                                                    <li>الجنسية: قم بإختيار الجنسية للعمالة المنزلية</li>
                                                    <li>جهة القدوم: قم بإختيار جهة القدوم حسب الدولة</li>
                                                </ul>
                                                <div class="secondaryTitle"> إثبات المقدرة المالية</div>
                                                <ul>
                                                    <li>تعريف الراتب: قم بإدخال القيمة للراتب الشهري من القطاع الخاص أو الحكومي</li>
                                                    <li>شهادة بنكية: قم بإدخال القيمة لمتوسط الحساب الشهري من الشهادة البنكية</li>
                                                </ul>
                                                <div class="secondaryTitle"> رفع الوثائق والمرفقات</div>
                                                <ul>
                                                    <li>إثبات المقدرة المالية</li>
                                                    <li>صورة سجل الأسرة أو الهوية الوطنية</li>
                                                </ul>
                                                <div class="info">
                                                    <p> الموافقة على التعهد والإقرار على سياسة الخصوصية والشروط والأحكام </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
