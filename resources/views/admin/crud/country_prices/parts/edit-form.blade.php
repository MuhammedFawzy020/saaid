<form action="{{ route('country-update') }}" method="post" id="Form">
    @csrf
    <input type="hidden" name="id" value="{{ $obj->id }}">
    <div class="row">
        <div class="form-group">
            <label for="exampleFormControlSelect1">أختر الدولة</label>
            <select class="form-control" required name="country_id" id="exampleFormControlSelect1">
                <option value="" selected>اختر الدولة</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $obj->country_id == $city->id ? 'selected' : '' }}>
                        {{ $city->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">السعر للمسلمين</label>
            <input type="number" required name="price" value="{{ $obj->price }}" class="form-control"
                placeholder="أدخل السعر للمسلمين">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">السعر لغير المسلمين</label>
            <input type="number" required name="none_muslim" value="{{ $obj->none_muslim }}" class="form-control"
                placeholder="أدخل السعر لغير المسلمين">
        </div>

    </div>
</form>
