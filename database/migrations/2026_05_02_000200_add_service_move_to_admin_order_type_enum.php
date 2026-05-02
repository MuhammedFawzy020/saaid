<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddServiceMoveToAdminOrderTypeEnum extends Migration
{
    public function up()
    {
        DB::statement("ALTER TABLE admins MODIFY COLUMN order_type ENUM('normal','rental','both','serviceMove') NOT NULL DEFAULT 'both'");
    }

    public function down()
    {
        DB::statement("ALTER TABLE admins MODIFY COLUMN order_type ENUM('normal','rental','both') NOT NULL DEFAULT 'both'");
    }
}
