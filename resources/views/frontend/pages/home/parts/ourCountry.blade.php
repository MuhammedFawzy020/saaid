
<!-- =============================== Countries ========================================== -->




@if (count($countries)>0)
    <section class="Countries-section" id="Countries">
        <div class="container-fluid">
            <div class="SectionTitle">
                <div class="title">
                    <h6> دول الاستقدام </h6>
                </div>
                <h2 class="hint"> اختيار الدولة التي تتم عملية الاستقدام منها</h2>
            </div>
            <div class="Countries-boxes">
                <div class="row">
                    @foreach($countries as $key=> $country)
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div> <img src="{{get_file($country->image)}}" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title">{{$country->title}}</div>
                                <p>{{$country->description}} </p>
                                <a href="{{route('all-workers',['country'=>$country->id])}}" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    @if($key==3 or $key==7 or $key==15)
                        <div class="col-lg-2"></div>
                        @endif
                    @endforeach

                </div>
            </div>

        </div>

    </section>





@else


    <section class="Countries-section" id="Countries">
        <div class="container-fluid">
            <div class="Countries-title">
                <div class="Countries-title-heading">
                    <h6> دول الاستقدام </h6>
                </div>
                <h2> اختيار الدولة التي تتم عملية الاستقدام منها</h2>
            </div>
            <div class="Countries-boxes">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div> <img src="{{asset('frontend')}}/img/countries/1.png" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title">أوغندا</div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{asset('frontend')}}/img/countries/2.png" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> كينيا </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{asset('frontend')}}/img/countries/3.jpeg" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> بنجلادش </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{asset('frontend')}}/img/countries/4.jpeg" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> الفلبين </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{asset('frontend')}}/img/countries/5.png" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> الهند </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{asset('frontend')}}/img/countries/6.png" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> موريتانيا </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="Countries-block">
                            <div class="Countries-media">
                                <div><img src="{{asset('frontend')}}/img/countries/7.png" alt=""/></div>
                            </div>
                            <div class="Countries-content">
                                <div class="count-content-title"> جيبوتي </div>
                                <p>مدة الاستقدام في خلال 60 يوم </p>
                                <a href="" class="defaultBtn"> اطلب الآن </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endif
