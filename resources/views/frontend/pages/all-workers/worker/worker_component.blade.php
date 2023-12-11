{{--<div class="cv">--}}
{{--    <div class="cvImg">--}}
{{--        <img src="{{get_file($cv->cv_file)}}">--}}
{{--    </div>--}}
{{--    <span class="type"> {{$cv->job?$cv->job->title:"لا يوجد"}} </span>--}}
{{--    <div class="details">--}}
{{--        <a href="#!" @isset($type) attr-type="{{$type}}" @endisset class="cvDetails" attr-id="{{$cv->id}}"> {{__('frontend.Details')}} </a>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<a href="#!" class="worker cvDetails" data-bs-toggle="modal" data-bs-target=".cvModal"  @isset($type) attr-type="{{$type}}" @endisset  attr-id="{{$cv->id}}">--}}
{{--    <img src="{{get_file($cv->cv_file)}}" alt="">--}}
{{--    <span class="job">  {{$cv->job?$cv->job->title:"لا يوجد"}}--}}
{{--    </span>--}}
{{--    <span class="more">  {{__('frontend.Details')}}  </span>--}}
{{--</a>--}}


<div class="worker-box">
    <div class="worker-media">
        <img src="{{get_file($cv->cv_file)}}" alt="#">
    </div>
    <div class="worker-content">
        <a href="#!" data-bs-toggle="modal" data-bs-target=".cvModal" @isset($type) attr-type="{{$type}}"
           @endisset  attr-id="{{$cv->id}}" class="twm-job-title">
            <h4> {{$cv->name}} </h4>
        </a>
        <ul class="list-unstyled">
            <li><p class="worker-address">{{__('frontend.Nationality')}}
                    : {{$cv->nationalitie?$cv->nationalitie->title:""}} </p></li>
            <li><p class="worker-job">  {{__('frontend.Occupation')}} : {{$cv->job?$cv->job->title:""}} </p></li>
        </ul>
        <ul class="list-unstyled">
            <li><p class="worker-address"> {{__('frontend.Religion')}} : {{$cv->religion?$cv->religion->title:""}} </p>
            </li>
            @if($type=='transport')
                <li>
                    <p class="worker-job">
                        سعر نقل الخدمات:
                        {{$cv->transfer_price??""}} {{__('frontend.SAR')}}
                    </p>
                </li>
            @else
                <li>
                    <p class="worker-job">
                        {{__('frontend.Recruitment price')}}:
                        {{$cv->nationalitie->recruitment_price}} {{__('frontend.SAR')}}
                    </p>
                </li>
            @endif
        </ul>
        <ul class="list-unstyled">
            <li><p class="worker-address">
                    {{__('frontend.Practical experience')}} :
                    @if($cv->type_of_experience == 'new')
                        {{$cv->type_of_experience?'قادم جديد':"--"}}
                    @else
                        {{$cv->type_of_experience?'لديه خبرة سابقة':"--"}}
                    @endif

                </p></li>

            <li><p class="worker-job"> {{__('frontend.age')}} : {{$cv->age??""}} سنة </p></li>

        </ul>
        @if($type=='transport')
            <ul class="list-unstyled">
                <li><p class="worker-address">  مدة العمل للكفيل السابق : {{$cv->periodservices??""}} </p></li>

                <li><p class="worker-job"> سبب النقل :  {{$cv->reasonservices??""}} </p></li>
            </ul>
        @endif

        {{--        <a--}}
        {{--            href="#!" class="worker detialsBtn cvDetails" data-bs-toggle="modal" data-bs-target=".cvModal"--}}
        {{--            @isset($type) attr-type="{{$type}}" @endisset  attr-id="{{$cv->id}}"> التفاصيل </a>--}}
        {{--        <a--}}
        {{--            href="#!" class="worker bookBtn cvDetails" href="{{route('register',$cv->id)}}"> احجز الات</a>--}}
        {{--    --}}
        <div class="cv-comp">
            <a href="#!" class="worker btn cvDetails" data-bs-toggle="modal" data-bs-target=".cvModal"
               @isset($type) attr-type="{{$type}}" @endisset  attr-id="{{$cv->id}}">

                التفاصيل

            </a>
            @auth
                <a href="{{route('frontend.show.worker',$cv->id)}}" class="btn book">
                    احجز الان

                </a>
            @else
                <a href="{{route('register',$cv->id)}}" class="btn book">
                    احجز الان

                </a>
            @endauth

        </div>
        {{--        <a data-bs-toggle="modal" data-bs-target=".cvModal" @isset($type) attr-type="{{$type}}" @endisset  attr-id="{{$cv->id}}" class="btn ">--}}

        {{--            عرض التفاصيل--}}

        {{--        </a>--}}
        {{--        @auth--}}
        {{--            <a href="{{route('frontend.show.worker',$cv->id)}}" class="btn book">--}}
        {{--                {{__('frontend.Book a Cv')}}--}}

        {{--            </a>--}}
        {{--        @else--}}
        {{--            <a href="{{route('register',$cv->id)}}" class="btn book">--}}
        {{--                {{__('frontend.Book a Cv')}}--}}

        {{--            </a>--}}
        {{--        @endauth--}}
    </div>
    {{--    <div class="worker-right-content">--}}
    {{--        <div class="worker-age"><span>{{$cv->age??""}}</span>سنة</div>--}}
    {{--    </div>--}}
</div>
