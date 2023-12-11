@foreach($notifications as $notification)

    <li class="notification">
        <div class=" date">
            <span> <i class="ri-calendar-line"></i>  {{date("m/d/Y",strtotime($notification->created_at))}} </span>
            <span> <i class="ri-time-line"></i> {{date("h:i A",strtotime($notification->created_at))}} </span>
        </div>
        <h6 class="notificationTitle"> </h6>
        <p>{{$notification->desc}} </p>
    </li>
@endforeach

