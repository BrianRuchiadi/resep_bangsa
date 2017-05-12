<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WarnaPakaian extends Migration
{
    public function up()
    {
        Schema::create('warna_pakaian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('kode_hex');
            $table->timestamps();
            $table->softDeletes();      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warna_pakaian');
    }
}
