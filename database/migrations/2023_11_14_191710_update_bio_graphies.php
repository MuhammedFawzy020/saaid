<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBioGraphies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('biographies', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('contract_period')->nullable();
            $table->string('warrenty_period')->nullable();
            $table->string('education')->nullable();
            $table->string('passport_start')->nullable();
            $table->string('passport_end')->nullable();
            $table->string('passport_city')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('no_of_childrens')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('phone_no')->nullable();
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
