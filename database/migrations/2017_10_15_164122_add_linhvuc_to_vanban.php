<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLinhvucToVanban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vanban', function (Blueprint $table) {
            $table->unsignedInteger('linhvuc_id')->default(1);
            $table->foreign('linhvuc_id')
                ->references('id')->on('linhvuc')
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
        Schema::table('vanban', function (Blueprint $table) {
            $table->dropForeign('linhvuc_id');
            $table->dropColumn('linhvuc_id');
        });
    }
}
