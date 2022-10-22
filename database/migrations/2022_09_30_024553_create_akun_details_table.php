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
            $table->integer('qty');
            $table->integer('price');
            $table->string('category');
            $table->string('uom');
            $table->text('address');
            $table->unsignedBigInteger('akun_id')->index();
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
