<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HargaDasarPakaian extends Migration
{
    public function up()
    {
        Schema::create('harga_dasar_pakaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('variasi_pakaian')->unsigned();
            $table->decimal('harga_dasar', 10, 2);
            $table->timestamps();
            $table->softDeletes();  

            $table->foreign('variasi_pakaian')->references('id')->on('variasi_pakaian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harga_dasar_pakaian');
    }
}
