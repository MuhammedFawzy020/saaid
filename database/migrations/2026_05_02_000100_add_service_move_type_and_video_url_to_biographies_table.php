<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddServiceMoveTypeAndVideoUrlToBiographiesTable extends Migration
{
    public function up()
    {
        Schema::table('biographies', function (Blueprint $table) {
            $table->string('video_url')->nullable()->after('vedio');
        });

        DB::statement("ALTER TABLE biographies MODIFY COLUMN type ENUM('admission','transport','serviceMove') NOT NULL DEFAULT 'admission'");
    }

    public function down()
    {
        DB::statement("ALTER TABLE biographies MODIFY COLUMN type ENUM('admission','transport') NOT NULL DEFAULT 'admission'");

        Schema::table('biographies', function (Blueprint $table) {
            $table->dropColumn('video_url');
        });
    }
}
