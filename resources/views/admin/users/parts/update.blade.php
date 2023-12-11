@extends('admin.layouts.layout')
@section('page-title')
    تعديل العميل
@endsection

@section('content')


    <form id="editForm" class="addForm" method="POST"  action="{{route('users.update',$users->id)}}" >
        @csrf
@method('PUT')
        <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-4">
            <div class="form-group">
                <label for="biography_number">رقم الهاتف </label>
                <input data-validation="required" required type="number" class="form-control"
                       value="{{$users->phone}}"
                       id="biography_number" name="phone" placeholder="">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">{{__('admin.name')}}</label>
            <input type="text" class="form-control" name="name" value="{{$users->name}}" id="name">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-4">
            <label for="biography_number">المدينة </label>

            <select data-validation="required"  name="city_id" required class="form-select" aria-label="Default select example"
                    onselect="
                    @foreach(\App\Models\City::get() as $city)
                        {{$users->city_id}}">{{$city->title}}
                    @endforeach">
                @foreach(\App\Models\City::get() as $city)
                    <option value="{{$city->id}}">{{$city->title}}</option>
                @endforeach
            </select>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-4">
            <div class="form-group">
                <label for="biography_number">الباسورد </label>
                <input   type="password" class="form-control"
                       value=""
                       id="biography_number" name="password" placeholder="">
            </div>
        </div>


</div>

        <button type="submit" class="btn btn-primary my-" id="addButton">{{__('admin.edit_m')}}</button>

    </form>


@endsection


@section('js')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>


        $('#editForm').on('submit',(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: "{{route('users.update',$users->id)}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (res) {

                    if (res['status'] == true) {

                        swal(" {{__('admin.edituser')}} ", "{{__('admin.editusersuccess')}}", "success", {button: "{{__('admin.ok')}}",});
                        setTimeout(success, 3000);

                    } else if (res['status'] == 'errors') {
                        swal("  ", "{{__('admin.verifyingInputs')}}", "error", {button: "{{__('admin.ok')}}",});

                    }
                    else {
                        swal("  ", "{{__('admin.Please try again later')}}", "error", {button: "{{__('admin.ok')}}",});


                    }
                },
                error: function (data) {
                    swal("  ", "Please try again later", "error", {button: "{{__('admin.ok')}}",});


                }
            });
        }));

        function success(){
            window.location="{{route('users.index')}}";
        }


    </script>




@endsection
