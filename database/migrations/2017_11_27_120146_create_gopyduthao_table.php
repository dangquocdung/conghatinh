<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopyduthaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gopyduthao', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('duthao_id');
            $table->foreign('duthao_id')
                ->references('id')->on('duthaovanban')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('hoten');
            $table->string('sodt');
            $table->string('email');
            $table->string('diachi');
            $table->text('noidung');
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
        Schema::dropIfExists('gopyduthao');
    }
}
