<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoikiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cqbh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('ghichu')->nullable();
            $table->boolean('hoatdong')->default(1);
            $table->timestamps();
        });


        Schema::create('nguoiki', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('ghichu')->nullable();
            $table->boolean('hoatdong')->default(1);

            $table->unsignedInteger('cqbh_id');
            $table->foreign('cqbh_id')
                ->references('id')->on('cqbh')
                ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('nguoiki');

        Schema::dropIfExists('cqbh');
    }
}
