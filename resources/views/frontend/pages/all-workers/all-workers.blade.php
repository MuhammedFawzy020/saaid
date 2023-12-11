@extends('frontend.layouts.layout')

@section('title')
    {{__('frontend.Recruitment Request')}}
@endsection

@section('styles')
    <style>
        .wrapper {
            margin: 30px;
            padding: 30px;
            background: #fff;
            width: 100%;
            height: 300px;
            display: flex;
            flex-direction: column;
            border-radius: 15px;
        }

        .wrapper-cell {
            /* display: flex; */
            margin-bottom: 30px;
        }

        @-webkit-keyframes placeHolderShimmer {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }

        @keyframes placeHolderShimmer {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }

        .animated-background,
        .text-line,
        .image {
            -webkit-animation-duration: 1.25s;
            animation-duration: 1.25s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: placeHolderShimmer;
            animation-name: placeHolderShimmer;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            background: #F6F6F6;
            background: linear-gradient(to right, #F6F6F6 8%, #F0F0F0 18%, #F6F6F6 33%);
            background-size: 800px 104px;
            height: 96px;
            position: relative;
        }

        .image {
            height: 200px;
            width: 100%;
        }

        .text {
            /* margin-left: 20px; */
        }

        .text-line {
            height: 10px;
            width: 100%;
            margin: 4px 0;
            margin-top: 10px;
        }

        .text-line.price {
            height: 40px;
            width: 100%;
            margin: auto;
            margin-top: 10px;
        }
    </style>
@endsection


@section('content')
    <!-- INNER PAGE BANNER -->
    <div class=" overlay-wraper page-banner">
        <div class="overlay-main"></div>
        @if($type=='transport')
            <div class="container">
                <div class="banner-content">
                    <div class="banner-title">
                        <div class="banner-title-name">
                            <h2> التاجير </h2>
                        </div>
                    </div>
                    <div>
                        <ul class="page-breadcrump list-unstyled">
                            <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li> التاجير </li>
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="banner-content">
                    <div class="banner-title">
                        <div class="banner-title-name">
                            <h2> طلب الاستقدام </h2>
                        </div>
                    </div>
                    <div>
                        <ul class="page-breadcrump list-unstyled">
                            <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li> طلب الاستقدام </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!-- INNER PAGE BANNER END -->
    <div class="workers-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 rightSidebar">
                    <div class="side-bar">
                        <h4> بحث متقدم </h4>
                        <form class="allWorkersSide" action="{{route('all-workers')}}" method="get">
                            @csrf
                            <!-- hide filter in small media -->
                            <div class="hideSideBtn">
                                <h4> تصفية النتائج </h4>
                                <span class="icon"> <i class="fa-solid fa-close"></i> </span>
                            </div>
                            <div class="sidebar-filter">

                                @if(count($nationalities) > 0)
                                    <div class="accordionItem">
                                        <!-- accordion Button -->
                                        <button class="accordionButton" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#nationalityFilter">
                                            الجنسية
                                            <sapn class="plus"></sapn>
                                        </button>

                                        <!-- accordion data -->
                                        <div id="nationalityFilter" class="collapse show">
                                            <div class="accordionData">
                                                @foreach($nationalities as $key=> $nationalitie)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nationality" id="{{'nationality'.($key+1)}}"  value="{{$nationalitie->id}}" >
                                                        <label class="form-check-label" for="{{'nationality'.($key+1)}}"> {{$nationalitie->title}}  </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if(count($jobs) > 0)
                                    <!-- item -->
                                    <div class="accordionItem">
                                        <!-- accordion Button -->
                                        <button class="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#jobFliter">
                                            {{__('frontend.Job')}}
                                            <sapn class="plus"></sapn>
                                        </button>
                                        <!-- accordion data -->
                                        <div id="jobFliter" class=" collapse show">
                                            <div class="accordionData">
                                                @foreach($jobs as$key=> $job)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"  name="job" id="{{'job'.($key+1)}}" value="{{$job->id}}">
                                                        <label class="form-check-label" for="{{'job'.($key+1)}}">{{$job->title}}  </label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(count($ages) > 0)
                                    <!-- item -->
                                    <div class="accordionItem">
                                        <!-- accordion Button -->
                                        <button class="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#ageFliter">
                                            العمر
                                            <sapn class="plus"></sapn>
                                        </button>
                                        <!-- accordion data -->
                                        <div id="ageFliter" class=" collapse show">
                                            <div class="accordionData">
                                                @foreach($ages as $key=>$age)
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="{{$age->id}}" type="radio" name="age" id="{{'age'.($key+1)}}">
                                                        <label class="form-check-label" for="{{'age'.($key+1)}}"> {{__('frontend.from')}} {{$age->from}} {{__('frontend.to')}}  {{$age->to}}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="control view-button">
                                    <a href="{{route('all-workers')}}" class="btn clear" type="button"> اعادة تهيئة </a>
                                    <button class="btn confirm" type="submit"> تاكيد </button>

                                </div>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="hideSideBtn">
                        <h4> تصفية النتائج </h4>
                        <span class="icon"> <i class="fa-solid fa-sliders"></i> </span>
                    </div>

                    <div class="workers-list">
                        <div class="row"  id="hereWillDisplayAllWorker">
                            @include('frontend.pages.all-workers.worker.workers_page')
                        </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade cvModal" id="showDetails"  tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content"  id="CVHere">

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>



@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            @if(request()->has('country') )

            function checkWithValue(val) {
                $('[name=nationality]').filter(function() {
                    return this.value == val;
                }).prop("checked", "true");
            }


            checkWithValue({{request()->country}});
            var country_id='{{request()->country}}';

            @endif

            @if(request()->has('nationality') )
            $('[name=nationality]').filter(function() {
                return this.value == {{request()->nationality}};
            }).prop("checked", "true");
            @endif
            @if(request()->has('job') )
            $('[name=job]').filter(function() {
                return this.value == {{request()->job}};
            }).prop("checked", "true");
            @endif
            @if(request()->has('age') )
            $('[name=age]').filter(function() {
                return this.value == {{request()->age}};
            }).prop("checked", "true");
            @endif
        });
    </script>
    <script>

        var loader_html = `
  <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html ">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
 <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

        <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>`;


        //load more script
        var new_page = 1;
        var url = '{{route('all-workers')}}';
        var link_only = '{{route('all-workers')}}';
        @if($type=='transport')

        var url = '{{route('all-workers-transport')}}';
        var link_only = '{{route('all-workers-transport')}}';

        @endif

        var age = ($('input[name="age"]:checked').val() ==undefined) ?"":$('input[name="age"]:checked').val();
        var job = ($('input[name="job"]:checked').val()==undefined)?"": $('input[name="job"]:checked').val();
        var nationality = ( $('input[name="nationality"]:checked').val()==undefined)?"": $('input[name="nationality"]:checked').val();
        $(document).unbind("click").on('click', '#load_more_button', function (e) {
            e.preventDefault()
            ++new_page
            // console.log("new page" , new_page)
            loadMoreData(new_page);
        })//end fun

        function loadMoreData(new_page) {

            url = link_only + "?page=" + new_page + "&age=" + age + "&job=" + job + "&nationality=" + nationality
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function () {
                    $('#hereWillDisplayAllWorker').append(loader_html);
                    $('#load_more_button').html(`<div class="spinner-border mt-1 mb-2" role="status"> </div>`);
                },
                complete: function () {

                },
                success: function (data) {
                    console.log(data.last_page, data.current_page)
                    if (data.last_page == data.current_page) {
                        document.getElementById("load_more_button").remove();
                    }

                    setTimeout(function () {
                        var elements = document.getElementsByClassName("loader_html");
                        while (elements.length > 0) elements[0].remove();
                        // var elements = document.getElementsByClassName("loader_html");
                        //while (elements.length > 0) elements[0].remove();
                        $('#hereWillDisplayAllWorker').append(data.html);
                        $('#load_more_button').html("{{__('frontend.load more')}}")
                    }, 100);
                },
                error: function (data) {
                    alert('Something went wrong.');
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });

        }//end fun


        $(document).on('click', '#SearchWorkerButton', function (e) {
            e.preventDefault();
            new_page = 1;
            console.log('ll',$('input[name="nationality"]:checked').val());
            age =  ($('input[name="age"]:checked').val() ==undefined) ?"":$('input[name="age"]:checked').val();
            job = ($('input[name="job"]:checked').val()==undefined)?"": $('input[name="job"]:checked').val();
            {{--nationality = ( $('input[name="nationality"]:checked').val()==undefined)?{{(request()->has('country')?request()->country:"")}}: $('input[name="nationality"]:checked').val();--}}
            var nat ={{(request()->has('country'))?request()->country:''}}
                nationality = ( $('input[name="nationality"]:checked').val()==undefined)?nat: $('input[name="nationality"]:checked').val();

            console.log($('input[name="nationality"]:checked').val());
            url = link_only + "?page=" + new_page + "&age=" + age + "&job=" + job + "&nationality=" + nationality
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function () {
                    $("#hereWillDisplayAllWorker").html(loader_html)
                    $('#SearchWorkerButton').attr('disabled', true)
                    $('#SearchWorkerButton').html(`<i class='fa fa-spinner fa-spin '></i>`)
                },
                complete: function () {

                },
                success: function (data) {

                    window.setTimeout(function () {
                        $("#hereWillDisplayAllWorker").html(data.html)
                        $('#SearchWorkerButton').attr('disabled', false)
                        $('#SearchWorkerButton').html(`  <span></span> {{__('frontend.Apply')}}`)
                        console.log(data.last_page, data.current_page)
                        if (data.last_page == data.current_page) {
                            document.getElementById("load_more_button").remove();
                        } else {
                            $("#buttonOfFilter").html(` <button id="load_more_button" class="customBtn" type="button">
                            {{__('frontend.load more')}}
                            </button>`)
                        }

                    }, 2000);

                },
                error: function (data) {
                    $('#SearchWorkerButton').attr('disabled', false)
                    $('#SearchWorkerButton').html(`  <span></span> {{__('frontend.Apply')}}`)

                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });//end ajax
        });//end submit


        $(document).on('click', '#SearchResetButton', function (e) {
            e.preventDefault()
            var ob = $(this)
            ob.html(`<i class='fa fa-spinner fa-spin '></i>`)
            // $(".select2").val(null).trigger("change")
            $('input[name="job"]').prop('checked', false);
            $('input[name="age"]:checked').prop('checked', false);

            $('input[name="nationality"]').prop('checked', false);
            window.setTimeout(function () {
                ob.html(`{{__('frontend.Clear')}}
                <span></span>`)
            }, 200);
            //make reset for all select2


        })

    </script>

    @isset($component)
        <script>
            var cv_loader = ` <div class="linear-background"></div>`;
            var url = '{{route('front.show-worker-details',$component)}}';
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function () {
                    $("#CVHere").html(cv_loader)
                    $('#showDetails').modal('show')
                    //$(".spinner").show()
                },
                success: function (data) {
                    $(".spinner").hide()
                    window.setTimeout(function () {
                        $('#CVHere').html(data.html);
                    }, 1000);
                    new Swiper(".workerCvSlider", {
                        spaceBetween: 0,
                        centeredSlides: true,
                        // loop: true,
                        speed: 1000,
                        pagination: {
                            el: ".workerCvSliderpagination",
                            clickable: true,
                        },
                        keyboard: {
                            enabled: true,
                        },
                        navigation: {
                            nextEl: ".workerCvSliderNext",
                            prevEl: ".workerCvSliderPrev",
                        },
                    });
                },
                error: function (data) {
                    $('#showDetails').modal('hide')
                    alert('{{__('frontend.errorTitleAuth')}}')
                }
            });

        </script>
    @endisset

    <script>
        clear();
        function clear() {

            var age =  ($('input[name="age"]:checked').val() ==undefined) ?"":$('input[name="age"]:checked').val();
            var job = ($('input[name="job"]:checked').val()==undefined)?"": $('input[name="job"]:checked').val();
            var nationality =( $('input[name="nationality"]:checked').val()==undefined)?"": $('input[name="nationality"]:checked').val();
            if (job == '' && age == '' && nationality == '') {
                $('#SearchResetButton').hide();
                $('#SearchWorkerButton').trigger('click');

            } else {
                $('#SearchResetButton').show();

            }
        }
        $('input[name="job"]').prop('checked', false);
        $('input[name="age"]').prop('checked', false);

        $('input[name="nationality"]').prop('checked', false);



    </script>

@endsection
