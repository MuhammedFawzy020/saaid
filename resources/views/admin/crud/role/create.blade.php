@extends('admin.layouts.layout')
@section('page-title')
    أضافة دور
@endsection

@section('content')


    <form id="addForm" class="addForm" method="POST"  action="{{route('roles.store')}}" >
        @csrf

        <div class="form-group">
            <label for="name" class="form-control-label">الاسم</label>
            <input type="text" data-validation="required" required class="form-control" name="name" value="" id="name">
        </div>

        <div class="row">
            @foreach($permissions as $permission)

                <span class="form-check col-md-4 my-4">
            <input class="form-check-input " type="checkbox" name="permissions[]"  value="{{$permission->id}}" id="flexCheckDefault">
            <label class="form-check-label mx-4" for="flexCheckDefault">
                {{$permission->name}}
            </label>
        </span>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary my-"  form="addForm">اضافة</button>

    </form>


@endsection

@section('js')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>


        $('#addForm').on('submit',(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: "{{route('roles.store')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (res) {

                    if (res['status'] == true) {

                        swal(" اضافة دور ", "تمت الاضافة بنجاح", "success", {button: "حسناً",});
                        setTimeout(success, 3000);

                    } else if (res['status'] == 'errors') {
                        swal("  ", "يرجي التاكد من البيانات والتاكد من اسم الدور لايزيد عن 30 حرف", "error", {button: "حسناً",});

                    }
                    else {
                        swal("  ", "يرجي المحاولة ف وقت لاحق", "error", {button: "حسناً",});


                    }
                },
                error: function (data) {
                    swal("  ", "يرجي المحاولة ف وقت لاحق", "error", {button: "حسناً",});


                }
            });
        }));

        function success(){
            window.location="{{route('roles.index')}}";
        }


    </script>




@endsection
