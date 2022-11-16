<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRsppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rspps', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('program_id')->index()->nullable();
            $table->unsignedBigInteger('kegiatan_id')->index()->nullable();
            $table->unsignedBigInteger('kro_id')->index()->nullable();
            $table->unsignedBigInteger('ro_id')->index()->nullable();
            $table->unsignedBigInteger('komponen_id')->index()->nullable();
            $table->unsignedBigInteger('sub_komponen_id')->index()->nullable();
            $table->foreign('ruh_belanja_id')->references('id')->on('ruh_belanjas')->onDelete('cascade');
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
        Schema::dropIfExists('rspps');
    }
}
