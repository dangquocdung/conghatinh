<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTepvanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tepvanban', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('vanban_id');
            $table->foreign('vanban_id')
                ->references('id')->on('vanban')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('media_id');
            $table->foreign('media_id')
                ->references('id')->on('media')
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
        Schema::dropIfExists('tepvanban');
    }
}
