<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuhBelanjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruh_belanjas', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_doc');
            $table->string('volume');
            $table->string('satuan_ukur');
            $table->string('kepala_rab');
            $table->integer('th_anggaran');
            $table->string('code_satker');
            $table->string('name_satker');
            $table->string('code_kl_unit');
            $table->string('name_kl_unit');
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
        Schema::dropIfExists('ruh_belanjas');
    }
}
