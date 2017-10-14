<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLoaivbIdToVanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vanban', function (Blueprint $table) {
            $table->unsignedInteger('loaivb_id')->default(1);
            $table->foreign('loaivb_id')
                ->references('id')->on('loaivb')
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
            $table->dropForeign('loaivb_id');
            $table->dropColumn('loaivb_id');
        });
    }
}
