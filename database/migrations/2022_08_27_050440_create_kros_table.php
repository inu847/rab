<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kros', function (Blueprint $table) {
            $table->id();
            $table->string('code_kro');
            $table->string('kro');
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
        Schema::dropIfExists('kros');
    }
}
