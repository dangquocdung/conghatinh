<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoanhnghiephoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doanhnghiephoi', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('coquan_id');
            $table->foreign('coquan_id')
                ->references('id')->on('coquan')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('doanhnghiep');
            $table->string('daidien');
            $table->string('sodt');
            $table->string('email')->nullable();
            $table->string('diachi')->nullable();
            $table->text('cauhoi');
            $table->boolean('daduyet')->default(false);
            $table->string('nguoitraloi');
            $table->string('chucvu');
            $table->timestamp('ngaytraloi');
            $table->text('cautraloi');
            $table->text('ghichu')->nullable();
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
        Schema::dropIfExists('doanhnghiephoi');
    }
}
