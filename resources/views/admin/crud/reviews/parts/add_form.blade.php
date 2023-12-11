<form action="{{route('reviews.store')}}" method="post" id="Form">
    @csrf

    <div class="row ">
        <div class="col-12 p-2">
            <div class="form-group">
                <label for="cv_file"> ارفق صور الشخص </label>
                <input data-validation="required" required type="file" class="form-control dropify" value=""
                       id="cv_file" name="image" placeholder="">
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-2">
            <div class="form-group">
                <label for="salary">اسم الشخص </label>
                <input   type="text" data-validation="required" required  class="form-control"
                         value=""
                         id="salary" name="name" placeholder="">
            </div>
        </div>



        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-2">
            <div class="form-group">
                <label for="passport_number">التعليق </label>

                <textarea type="text" rows="5" data-validation="required" required  class="form-control"

                          id="comment" name="comment" >

                </textarea>

            </div>
        </div>

    </div>
</form>


