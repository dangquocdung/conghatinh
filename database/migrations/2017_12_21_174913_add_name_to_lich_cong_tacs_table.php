<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToLichCongTacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lich_cong_tacs', function (Blueprint $table) {
            //
            $table->string('name')->default('Lịch công tác UBND tỉnh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lich_cong_tacs', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
