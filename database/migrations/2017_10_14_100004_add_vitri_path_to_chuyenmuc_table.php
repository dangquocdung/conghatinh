<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVitriPathToChuyenmucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chuyenmuc', function (Blueprint $table) {
            $table->string('path')->default('chuyen-muc');
            $table->tinyInteger('vitri')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chuyenmuc', function (Blueprint $table) {
            $table->dropColumn('path');
            $table->dropColumn('vitri');
        });
    }
}
