@if (isset($ordersHistory) && count($ordersHistory) > 0)
    <input type="hidden" value="{{$current_page}}" id="history_page_orders">

    <div class="row" id="history_orders_section_to_append">
        @include('frontend.pages.profile.parts.history_order_component')
    </div>

    <div style="{{$ordersHistory->currentPage() == $ordersHistory->lastPage() ?"display:none!important":""}}" class="d-flex align-items-center justify-content-center py-5 row" >
        <button id="load_more_history_orders_button" class="customBtn " type="button">
            <p class="px-5">{{__('frontend.load more')}}</p>
            <span></span>
        </button>
    </div>



@else
    <div class="d-flex align-items-center justify-content-center py-5 row">
        <img style="width: 500px;height: 500px" src="{{asset('frontend/img/no-order.png')}}" alt="no data for current orders">
    </div>
@endif

