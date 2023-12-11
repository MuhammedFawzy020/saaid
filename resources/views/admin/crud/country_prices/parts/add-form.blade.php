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
            <label for="exampleInputEmail1">السعر</label>
            <input type="number" required name="price" class="form-control" placeholder="أدخل السعر">
        </div>

    </div>
</form>
