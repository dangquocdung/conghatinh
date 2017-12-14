<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongTinDoanhNghiepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_doanh_nghieps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('masothue')->unique();
            $table->string('diachi');
            $table->date('ngaythanhlap');
            $table->unsignedInteger('coquan_id');
            $table->foreign('coquan_id')
                ->references('id')->on('coquan')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('thong_tin_doanh_nghieps');
    }
}
