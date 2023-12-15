<div>
    <h4 class="card-title">اللوحة الاعلانية</h4>
    <form id="Banner_logo" method="post" action="{{ route('settings.update', $settings->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="form_type" value="banner">

        @foreach ($languages as $index => $language)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="{{ $language->title }}_title">اسم الاعلان </label>
                    <input data-validation="required" type="text" class="form-control"
                        value="{{ $settings->getTranslation('title_banner', $language->title) }}"
                        id="{{ $language->title }}_title" name="title_banner[]" placeholder="اسم الاعلان">
                </div>
            </div>
        @endforeach
        <div class="form-group row mb-4">
            <label for="header_logo"> الصورة
                (الرئيسى)</label>

            <input type="file" data-default-file="{{ get_file($settings->banner_logo) }}"
                class="form-control dropify" id="banner_logo" name="banner_logo" placeholder="اللوجو (الرئيسى)">

        </div>

        <div class="form-group row mb-4">
            <label for="passport_number">الدول </label>
            <select multiple name="countries_banner[]" class="form-control select2Users">
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" @if (in_array($country->id, json_decode($settings->countries_banner))) selected @endif>
                        {{ $country->title }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group row mb-4">

        </div>
        <div class="row mt-4">
            <div class="col-sm-6">

            </div> <!-- end col -->
            @if (checkPermission(4))
                <div class="col-sm-6">
                    <div class="text-end">
                        <button form="Banner_logo" type="submit" class="btn btn-success">
                            <i class="mdi mdi-content-save me-1"></i> حفظ
                        </button>
                    </div>
                </div> <!-- end col -->
            @endif
        </div> <!-- end row -->
    </form>
</div>
