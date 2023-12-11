@foreach($currentOrders as $currentOrder)
    <li  class="cv">
        <div class="profile-order-content row">
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12">
                <div class="order-media">
                    <div class="order-media-pic">
                        <img src="{{get_file($currentOrder->biography->images[0]->image ?? '')}}" alt="#">
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9 col-md-9 col-sm-12">
                <div class="order-content">
                    <h4>

                        {{$currentOrder->biography->job?$currentOrder->biography->job->title:""}}
                    </h4>
                    <p>
                        @if(($currentOrder->status== 'new'))
                            اختيار العمالة
                        @elseif($currentOrder->status== 'under_work')
                            حجز السيرة الذاتيه
                        @elseif($currentOrder->status== 'contract' )
                            تم التعاقد
                        @elseif($currentOrder->status== 'musaned' )
                            تم الربط في مساند
                        @elseif($currentOrder->status== 'traning' )
                            تحت الاجراء و التدريب
                        @elseif($currentOrder->status== 'visa' )
                            ختم التاشيره
                        @elseif($currentOrder->status== 'finished' )
                            وصول العمالة
                        @else
                            ملغى
                        @endif
                    </p>

                    <p class="order-number"><i class="fa-regular fa-suitcase"></i>{{$currentOrder->order_code}} </p>
                    <div class="order-details">
                        <div class="view-button">
                            <a href="{{get_file($currentOrder->biography->cv_file)}}" class="download"><i class="fa-regular fa-download"></i>  {{__('frontend.Download CV')}}</a>
                            <a href="{{route('frontend.show.order_details',$currentOrder->id)}}" class="details" ><i class="fa-regular fa-circle-info"></i>{{__('frontend.Details')}} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>





@endforeach
