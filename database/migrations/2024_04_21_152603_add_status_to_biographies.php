<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToBiographies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('biographies', function (Blueprint $table) {
            $table->boolean('display_or_hide')->nullable()->default(1)->comment('0 is hidden 1 is displayed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biographies', function (Blueprint $table) {
            //
        });
    }
}
