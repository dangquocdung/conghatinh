<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('vanban', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('loaitin_id');
            $table->foreign('loaitin_id')
                ->references('id')->on('loaitin')
                ->onUpdate('cascade')->onDelete('cascade');



            $table->string('kihieuvb');
            $table->date('ngaybanhanh');

            $table->unsignedInteger('nguoiki_id');
            $table->foreign('nguoiki_id')
                ->references('id')->on('nguoiki')
                ->onUpdate('cascade')->onDelete('cascade');



            $table->text('trichyeu');



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
        Schema::dropIfExists('vanban');
    }

}
