<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDaduyetToLichcongtac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lich_cong_tacs', function (Blueprint $table) {
            $table->boolean('daduyet')->default(false);
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
            $table->dropColumn('daduyet');
        });
    }
}
