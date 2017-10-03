<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoquanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coquan', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('nhomcq_id');
            $table->foreign('nhomcq_id')
                ->references('id')->on('nhomcq')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('lienket');

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
        Schema::dropIfExists('coquan');
    }
}
