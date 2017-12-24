<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTepVanBanKhacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tep_van_ban_khacs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('vanbankhac_id');
            $table->foreign('vanbankhac_id')
                ->references('id')->on('lich_cong_tacs')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('media_id');
            $table->foreign('media_id')
                ->references('id')->on('media')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('path');

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
        Schema::dropIfExists('tep_van_ban_khacs');
    }
}
