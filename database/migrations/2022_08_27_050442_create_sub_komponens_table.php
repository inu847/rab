<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKomponensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_komponens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('qty');
            $table->string('uom');
            $table->integer('price');
            $table->integer('amount');
            $table->unsignedBigInteger('komponen_id');
            $table->foreign('komponen_id')->references('id')->on('komponens')->onDelete('cascade');
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
        Schema::dropIfExists('sub_komponens');
    }
}
