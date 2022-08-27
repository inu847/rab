<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponens', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
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
        Schema::dropIfExists('komponens');
    }
}
