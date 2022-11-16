<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('qty')->nullable();
            $table->string('uom')->nullable();
            $table->integer('qty2')->nullable();
            $table->string('uom2')->nullable();
            $table->integer('qty3')->nullable();
            $table->string('uom3')->nullable();
            $table->integer('price')->nullable();
            $table->string('category')->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('akun_id')->index();
            $table->unsignedBigInteger('header_id')->index()->nullable();
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
        Schema::dropIfExists('akun_details');
    }
}
