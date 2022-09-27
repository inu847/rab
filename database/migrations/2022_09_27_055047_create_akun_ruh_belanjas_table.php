<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunRuhBelanjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_ruh_belanjas', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('akun_id')->index();
            $table->unsignedBigInteger('ruh_belanja_id')->index();
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
        Schema::dropIfExists('akun_ruh_belanjas');
    }
}
