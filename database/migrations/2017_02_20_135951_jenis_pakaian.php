<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JenisPakaian extends Migration
{
    public function up()
    {
        Schema::create('jenis_pakaian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keterangan');
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
        Schema::dropIfExists('jenis_pakaian');
    }
}
