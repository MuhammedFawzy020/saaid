<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecruitmentPriceToNationalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nationalities', function (Blueprint $table) {
            //
            $table->double('recruitment_price')->after("title")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nationalities', function (Blueprint $table) {
            //
            $table->dropColumn('recruitment_price');
        });
    }
}
