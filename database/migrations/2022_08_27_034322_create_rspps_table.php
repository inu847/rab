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
            $table->string('program');
            $table->string('kegiatan');
            $table->string('kro');
            $table->string('ro');
            $table->unsignedBigInteger('ruh_belanja_id');
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
