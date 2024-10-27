<form action="{{ route('country-store') }}" method="post" id="Form">
    @csrf

    <div class="row">
        <div class="form-group">
            <label for="exampleFormControlSelect1">أختر الدولة</label>
            <select class="form-control" required name="country_id" id="exampleFormControlSelect1">
                <option value="" selected>اختر الدولة</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">السعر للمسلمين</label>
            <input type="number" required name="price" class="form-control" placeholder="أدخل السعر للمسلمين">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">السعر لغير المسلم</label>
            <input type="number" required name="none_muslim" class="form-control"
                placeholder="أدخل السعر لغير المسلمين">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">سعر الايجار للمسلمين</label>
            <input type="number" required name="rent_muslim_price" class="form-control"
                placeholder="أدخل سعر الايجار للمسلمين ">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">سعر الايجار لغير المسلمين</label>
            <input type="number" required name="rent_none_muslim_price" class="form-control"
                placeholder="أدخل السعر الايجار لغير المسلمين">
        </div>

    </div>
</form>
