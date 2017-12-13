<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLoaitinIdToLichCongTacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lich_cong_tacs', function (Blueprint $table) {
            $table->unsignedInteger('loaitin_id')->default(58);
            $table->foreign('loaitin_id')
                ->references('id')->on('loaitin')
                ->onUpdate('cascade')->onDelete('cascade');
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
            $table->dropForeign('loaitin_id');
            $table->dropColumn('loaitin_id');
        });
    }
}
