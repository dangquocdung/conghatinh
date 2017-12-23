<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTinanhToTintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tintuc', function (Blueprint $table) {
            $table->boolean('tinanh')->default(false);
            $table->boolean('tinvideo')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tintuc', function (Blueprint $table) {
            $table->dropColumn('tinanh');
            $table->dropColumn('tinvideo');
        });
    }
}
