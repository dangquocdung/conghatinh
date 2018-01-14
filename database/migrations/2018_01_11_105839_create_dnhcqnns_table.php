<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDnhcqnnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dnhcqnns', function (Blueprint $table) {
            $table->increments('id');

            $table->string('doanhnghiep');
            $table->string('diachi')->nullable();
            $table->text('cauhoi');
            $table->timestamp('ngayhoi')->nullable();
            $table->boolean('daduyet')->default(false);
            $table->string('coquantraloi')->nullable();
            $table->string('nguoitraloi')->nullable();
            $table->string('chucvu')->nullable();
            $table->timestamp('ngaytraloi')->nullable();
            $table->text('cautraloi')->nullable();
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
        Schema::dropIfExists('dnhcqnns');
    }
}
