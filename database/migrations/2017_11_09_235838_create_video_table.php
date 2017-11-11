<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loaivideo_id');
            $table->foreign('loaivideo_id')
                ->references('id')->on('loaivideo')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->date('ngayphat');
            $table->string('src');
            $table->boolean('noibat')->default(false);
            $table->boolean('daduyet')->default(false);
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
        Schema::dropIfExists('video');
    }
}
