<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTacgiaToTintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tintuc', function (Blueprint $table) {
            //
            $table->string('tacgia')->nullable();
            $table->string('nguon')->nullable();
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
            //
            $table->dropColumn('tacgia');
            $table->dropColumn('nguon');
        });
    }
}
