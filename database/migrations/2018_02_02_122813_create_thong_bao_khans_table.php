<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongBaoKhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_bao_khans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noidung');
            $table->string('duongdan')->nullable();
            $table->boolean('daduyet')->default(false);
            $table->string('ghichu')->nullable();
            $table->timestamps();

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_bao_khans');
    }
}
