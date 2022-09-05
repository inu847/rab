<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ros', function (Blueprint $table) {
            $table->id();
            $table->string('code_ro');
            $table->string('ro');
            $table->unsignedBigInteger('kro_id');
            $table->foreign('kro_id')->references('id')->on('kros')->onDelete('cascade');
            $table->unsignedBigInteger('rspp_id');
            $table->foreign('rspp_id')->references('id')->on('rspps')->onDelete('cascade');
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
        Schema::dropIfExists('ros');
    }
}
