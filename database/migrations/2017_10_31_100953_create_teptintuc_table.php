<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeptintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teptintuc', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('tintuc_id');
            $table->foreign('tintuc_id')
                ->references('id')->on('tintuc')
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
        Schema::dropIfExists('teptintuc');
    }
}
