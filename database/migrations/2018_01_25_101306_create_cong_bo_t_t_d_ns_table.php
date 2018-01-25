<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongBoTTDNsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cong_bo_t_t_d_ns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('thongtin');
            $table->text('chienluoc');
            $table->text('tintuc');
            $table->text('kh_5nam');
            $table->text('kh_hangnam');
            $table->text('bc_hangnam');
            $table->text('bc_3nam');
            $table->text('nvci');
            $table->text('tinhhinh');
            $table->text('ghichu');
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
        Schema::dropIfExists('cong_bo_t_t_d_ns');
    }
}
