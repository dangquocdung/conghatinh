<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaitinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitin', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('chuyenmuc_id');
            $table->foreign('chuyenmuc_id')
                ->references('id')->on('chuyenmuc')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('name');
            $table->string('slug')->unique();
            $table->tinyInteger('thutu')->default(1);
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('loaitin');
    }
}
