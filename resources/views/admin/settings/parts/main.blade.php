<div>
    <h4 class="card-title">المعلومات الرئيسية</h4>
    <form id="Form_main" method="post" action="{{route('settings.update',$settings->id)}}">
        @csrf
        @method('PUT')
        <input type="hidden" name="form_type" value="main">
        <div class="row ">
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label
                            for="{{$language->title}}_title">اسم الموقع </label>
                        <input data-validation="required" type="text"
                               class="form-control"
                               value="{{$settings->getTranslation('title', $language->title)}}"
                               id="{{$language->title}}_title" name="title[]"
                               placeholder="اسم الموقع">
                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label
                            for="{{$language->title}}_title">عنوان الهيدر </label>
                        <input data-validation="required" type="text"
                               class="form-control"
                               value="{{$settings->getTranslation('header_title', $language->title)}}"
                               id="{{$language->title}}_header_title" name="header_title[]"
                               placeholder="اسم الموقع">
                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label for="summernote1{{$language->title}}">
                            نبذه بالهيدر
                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="header_desc[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="{{__('admin.the_answer')}} ({{__('admin.'.$language->title)}}) ">
                                                     {{$settings->getTranslation('header_desc', $language->title)}}
                                                    </textarea>
                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label for="summernote1{{$language->title}}">
                            من نحن
                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="about_us[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="{{__('admin.about us')}} ({{__('admin.'.$language->title)}}) ">
                                                     {{$settings->getTranslation('about_us', $language->title)}}
                                                 </textarea>
                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label for="summernote1{{$language->title}}">
                          تفاصيل خدمة العملاء (من نحن )
                        </label>
                        <input data-validation=""  class="form-control "
                                  name="service[]"
                                  id="summernote1{{$language->title}}"
                               value=" {{$settings->getTranslation('service', $language->title)}}" >

                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label for="summernote1{{$language->title}}">
                            تفاصيل الترخيص (من نحن )
                        </label>
                        <input data-validation=""  class="form-control " type="text"
                                  name="license[]"
                                  id="summernote1{{$language->title}}" value=" {{$settings->getTranslation('license', $language->title)}}">


                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label for="summernote1{{$language->title}}">
                            الضمان (من نحن )
                        </label>
                        <input type="text" data-validation=""  class="form-control "
                                  name="security[]"
                                  id="summernote1{{$language->title}}" value="{{$settings->getTranslation('security', $language->title)}}">


                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label for="summernote1{{$language->title}}">
                            التوصيل (من نحن )
                        </label>
                        <input type="text" data-validation=""  class="form-control "
                                  name="delivery[]"
                                  id="summernote1{{$language->title}}" value="  {{$settings->getTranslation('delivery', $language->title)}}">


                    </div>
                </div>
            @endforeach
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label
                            for="{{$language->title}}_title">العنوان</label>
                        <input data-validation="required" type="text"
                               class="form-control"
                               value="{{$settings->getTranslation('address1', $language->title)}}"
                               id="{{$language->title}}_title" name="address1[]"
                               placeholder="العنوان">
                    </div>
                </div>
            @endforeach
                <br><br>

        </div>
        <div class="row mt-4">
            <div class="col-sm-6">

            </div> <!-- end col -->
            @if(checkPermission(4))
                <div class="col-sm-6">
                    <div class="text-end">
                        <button form="Form_main" type="submit" class="btn btn-success">
                            <i class="mdi mdi-content-save me-1"></i> حفظ
                        </button>
                    </div>
                </div> <!-- end col -->
            @endif
        </div> <!-- end row -->
    </form>
</div>
