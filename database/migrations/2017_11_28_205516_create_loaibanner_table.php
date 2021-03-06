<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaibannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaibanner', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('loaibanner');
    }
}
