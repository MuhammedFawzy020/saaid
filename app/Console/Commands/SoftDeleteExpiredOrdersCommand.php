<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SoftDeleteExpiredOrders;

class SoftDeleteExpiredOrdersCommand extends Command
{
    protected $signature = 'orders:soft-delete-expired';

    protected $description = 'Soft delete expired orders';

    public function handle()
    {
        dispatch(new SoftDeleteExpiredOrders);
    }
}