<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBannerToChuyenmuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chuyenmuc', function (Blueprint $table) {
            $table->unsignedInteger('banner_id')->nullable();
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
            $table->dropColumn('banner_id');
        });
    }
}
