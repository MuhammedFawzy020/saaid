<div>
    <h4 class="card-title">نبذة عن </h4>
    <form id="Form_about" method="post" action="{{route('settings.update',$settings->id)}}">
        @method('PUT')
        <input type="hidden" name="form_type" value="about">
        <div class="row ">
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">النص عن
                            خدماتنا </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="our_service_desc[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="النص عن خدماتنا ">
                                                         {{$settings->getTranslation('our_service_desc', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">النص
                            بالاحصائيات</label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="our_statistics_desc[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="النص بالاحصائيات  ">
                                                         {{$settings->getTranslation('our_statistics_desc', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">نص طلب استقدام
                            خاص</label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="application_for_the_recruitment[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="نص طلب استقدام خاص ">
                                                         {{$settings->getTranslation('application_for_the_recruitment', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row mt-4">
            <div class="col-sm-6">

            </div> <!-- end col -->
            @if(checkPermission(4))
            <div class="col-sm-6">
                <div class="text-end">
                    <button form="Form_about" type="submit" class="btn btn-success">
                        <i class="mdi mdi-content-save me-1"></i> حفظ
                    </button>
                </div>
            </div> <!-- end col -->
            @endif
        </div> <!-- end row -->
    </form>
</div>
