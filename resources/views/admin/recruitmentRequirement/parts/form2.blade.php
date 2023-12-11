<div>
    <form id="Form_row2" method="post" action="{{route('admin.updateRecruitmentRequirement',$row2->id)}}">

        <input type="hidden" name="form_type" value="about">
        <div class="row ">
            @foreach($languages as $index=>$language)
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">عنوان الوثائق المطلوبة لإستقدام العماله المنزلية
                        </label>
                        <input type="text" data-validation="" rows="6" class="form-control "
                               name="title[]"
                               id="summernote1{{$language->title}}"
                               placeholder="النص عن خدماتنا " value="{{$row2->getTranslation('title', $language->title)}}" >

                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}"> الخطوة 1

                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="step_1[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="النص عن خدماتنا ">{{$row2->getTranslation('step_1', $language->title)}}</textarea>
                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">
                            الخطوة 2


                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="step_2[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="النص عن خدماتنا ">{{$row2->getTranslation('step_2', $language->title)}}</textarea>
                    </div>
                </div>
            @endforeach





            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}"> الخطوة 3

                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="step_3[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="النص عن خدماتنا ">{{$row2->getTranslation('step_3', $language->title)}}</textarea>
                    </div>
                </div>
            @endforeach


            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}"> الخطوة 4

                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="step_4[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="النص عن خدماتنا ">{{$row2->getTranslation('step_4', $language->title)}}</textarea>
                    </div>
                </div>
            @endforeach




        </div>
        <div class="row mt-4">
            <div class="col-sm-6">

            </div> <!-- end col -->
            @if(checkPermission(38))

                <div class="col-sm-6">
                    <div class="text-end">
                        <button form="Form_row2" type="submit" class="btn btn-success">
                            <i class="mdi mdi-content-save me-1"></i> حفظ
                        </button>
                    </div>
                </div> <!-- end col -->
            @endif
        </div> <!-- end row -->
    </form>
</div>
