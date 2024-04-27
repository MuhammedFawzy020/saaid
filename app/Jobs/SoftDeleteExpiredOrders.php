<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
use Carbon\Carbon;

class SoftDeleteExpiredOrders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $threshold = Carbon::now()->subDay(); // 24 hours ago

        $orders = Order::where('created_at', '<=', $threshold)
            ->where('status', 'under_work')->update(["status" => "canceled"]);

        foreach($orders as $order) {
            Biography::where("id", $order->biography_id)->update(["status" => "new", "admin_id" => null, "user_id" =>
            null]);
        }
        
    }
}
