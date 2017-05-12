<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VariasiPakaian extends Migration
{
    public function up()
    {
        Schema::create('variasi_pakaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('size')->unsigned();
            $table->integer('jenis_pakaian')->unsigned();
            $table->integer('bahan_print_pakaian')->unsigned();
            $table->integer('luas_daerah_print')->unsigned();
            $table->timestamps();
            $table->softDeletes();  

            $table->foreign('size')->references('id')->on('size')->onDelete('cascade');
            $table->foreign('jenis_pakaian')->references('id')->on('jenis_pakaian')->onDelete('cascade');
            $table->foreign('bahan_print_pakaian')->references('id')->on('bahan_print_pakaian')->onDelete('cascade');
            $table->foreign('luas_daerah_print')->references('id')->on('luas_daerah_print')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variasi_pakaian');
    }
}
