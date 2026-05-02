<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Biography;
use App\Models\Order;
use Carbon\Carbon;

class SoftDeleteExpiredOrders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $threshold = Carbon::now()->subHours(48);

        $orders = Order::where('updated_at', '<=', $threshold)
            ->whereIn('status', ['pending', 'under_work'])
            ->get();

        foreach ($orders as $order) {
            Biography::where("id", $order->biography_id)->update([
                "status" => "new",
                "admin_id" => null,
                "user_id" =>
                    null
            ]);
            $order->delete();
        }

    }
}
