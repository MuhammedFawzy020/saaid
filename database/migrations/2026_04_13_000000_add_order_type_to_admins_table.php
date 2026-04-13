<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderTypeToAdminsTable extends Migration
{
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->enum('order_type', ['normal', 'rental', 'both'])
                ->default('normal')
                ->after('admin_type')
                ->comment('نوع الطلبات التي يخدمها الموظف: normal=استقدام, rental=ايجار, both=كلاهما');
        });
    }

    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('order_type');
        });
    }
}
