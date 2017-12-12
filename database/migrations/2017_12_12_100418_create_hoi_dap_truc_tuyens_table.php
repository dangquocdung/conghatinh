<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoiDapTrucTuyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoi_dap_truc_tuyens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->string('sodt');
            $table->string('email');
            $table->string('diachi');
            $table->text('cauhoi');
            $table->boolean('daduyet')->default(false);
            $table->string('nguoitraloi')->nullable();
            $table->string('chucvu')->nullable();
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
        Schema::dropIfExists('hoi_dap_truc_tuyens');
    }
}
