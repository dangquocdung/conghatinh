<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotrophaplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotrophaply', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('linhvuc_id');
            $table->foreign('linhvuc_id')
                ->references('id')->on('linhvuc')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('doanhnghiep');
            $table->string('daidien');
            $table->string('sodt');
            $table->string('email')->nullable();
            $table->string('diachi')->nullable();
            $table->text('cauhoi');
            $table->boolean('daduyet')->default(false);

            $table->unsignedInteger('coquan_id')->nullable();
            $table->foreign('coquan_id')
                ->references('id')->on('coquan');

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
        Schema::dropIfExists('hotrophaply');
    }
}
