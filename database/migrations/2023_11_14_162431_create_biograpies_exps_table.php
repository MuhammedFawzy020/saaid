<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiograpiesExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biograpies_exps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('exp_job_id')->nullable();
            $table->bigInteger('exp_city_id')->nullable();
            $table->string('exp_period')->nullable();
            $table->bigInteger('biography_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biograpies_exps');
    }
}
