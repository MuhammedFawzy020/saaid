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
            <label for="exampleInputEmail1">السعر للديانة الغير مسلم</label>
            <input type="number" required name="none_muslim" class="form-control"
                placeholder="أدخل السعر لغير المسلمين">
        </div>

    </div>
</form>
