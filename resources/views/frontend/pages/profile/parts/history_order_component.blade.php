@foreach($ordersHistory as $orderHistory)
    <div class="cv">
        <div class="row ">
            <div class="col-xl-3 col-lg-5 p-2">

                <div class="swiper workerCvSlider ">
                    <div class="swiper-wrapper mainImg">
                        <!-- cv image -->
                        @foreach($orderHistory->biography->images as $image)
                            <!-- cv image -->
                            <div class="swiper-slide ">
                                <a data-fancybox="user{{$image->id}}-CV-{{$image->id}}"
                                   href="{{get_file($image->image)}}">
                                    <img src="{{get_file($image->image)}}" alt="">
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-7 p-2">
                <div class="info">
                    <ul>
                        <li>
                            <p class="title"> {{__('frontend.Nationality')}} : </p>
                            <h5 class="data"> {{$orderHistory->biography->nationalitie?$orderHistory->biography->nationalitie->title:""}} </h5>
                        </li>
                        <li>
                            <p class="title">  {{__('frontend.orderCode')}} :  </p>
                            <h5 class="data">  {{$orderHistory->order_code}}  </h5>
                        </li>
                        <li>
                            <p class="title"> حالة الاستقدام : </p>
                            @if ($orderHistory->type == "canceled")
                                <h5 class="data text-danger"> لقد انتهت صلاحية الحجز وتم الغاءة </h5>
                            @else
                                <h5 class="data"> تم اختيار احد مسؤلى خدمة العملاء </h5>
                            @endif
                        </li>
                    </ul>
                    <div class="control">
                        <a href="cv_print.html" class="btn btn-outline-success"> <i class="ri-download-cloud-fill"></i>
                            تنزيل السيرة
                            الذاتية </a>
                        <a href="order_details.html" class="btn btn-success"> التفاصيل <i class="ri-arrow-left-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach
