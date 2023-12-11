<div class="left-sidebar-content">
    @if (isset($currentOrders) && count($currentOrders) > 0)

    <div class="profile-leftsidebar-content">
        <ul class="list-unstyled" id="current_orders_section_to_append">
            @include('frontend.pages.profile.parts.current_order_component')


        </ul>
        <div style="{{$currentOrders->currentPage() == $currentOrders->lastPage() ?"display:none!important":""}}" class="d-flex align-items-center justify-content-center py-5 row" >
            <button id="load_more_current_orders_button" class="customBtn " type="button">
                <p class="px-5">{{__('frontend.load more')}}</p>
                <span></span>
            </button>
        </div>

    </div>
    @else
        <div class="d-flex align-items-center justify-content-center py-5 row">
            <img style="width: 500px;height: 500px" src="{{asset('frontend/img/no-order.png')}}" alt="no data for current orders">
        </div>
    @endif
</div>





