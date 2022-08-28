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
            $table->string('code_program');
            $table->string('name_program');
            $table->string('code_kegiatan');
            $table->string('name_kegiatan');
            $table->string('volume_ro');
            $table->string('jenis_komponen');
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
