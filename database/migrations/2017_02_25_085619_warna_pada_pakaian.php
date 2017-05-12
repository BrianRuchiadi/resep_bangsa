<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WarnaPadaPakaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warna_pada_pakaian', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('variasi_pakaian')->unsigned();
            $table->integer('warna_pakaian')->unsigned();
            $table->timestamps();
            $table->softDeletes();     

            $table->foreign('variasi_pakaian')->references('id')->on('variasi_pakaian')->onDelete('cascade');
            $table->foreign('warna_pakaian')->references('id')->on('warna_pakaian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warna_pada_pakaian');
    }
}
