<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('loaitin_id');
            $table->foreign('loaitin_id')
                ->references('id')->on('loaitin')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('avatar');
            $table->text('gioithieu');
            $table->text('noidung');
            $table->boolean('noibat')->default(false);
            $table->boolean('daduyet')->default(false);
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
        Schema::dropIfExists('tintuc');
    }
}
