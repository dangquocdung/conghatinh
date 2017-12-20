<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIconToChuyenmucLoaitinTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chuyenmuc', function (Blueprint $table) {
            $table->string('icon')->default('glyphicon-ok');
        });
        Schema::table('loaitin', function (Blueprint $table) {
            $table->string('icon')->default('glyphicon-ok');
        });
        Schema::table('loaivb', function (Blueprint $table) {
            $table->string('icon')->default('glyphicon-ok');
        });
        Schema::table('loaivideo', function (Blueprint $table) {
            $table->string('icon')->default('glyphicon-ok');
        });
        Schema::table('nhomcq', function (Blueprint $table) {
            $table->string('icon')->default('glyphicon-ok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chuyenmuc', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
        Schema::table('loaitin', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
        Schema::table('loaivb', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
        Schema::table('loaivideo', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
        Schema::table('nhomcq', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
}
