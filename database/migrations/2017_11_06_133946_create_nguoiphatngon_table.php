<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiphatngonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoiphatngon', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coquan_id');
            $table->foreign('coquan_id')
                ->references('id')->on('coquan')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('name');
            $table->string('chucdanh');
            $table->string('codinh')->nullable();
            $table->string('didong')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('nguoiphatngon');
    }
}
