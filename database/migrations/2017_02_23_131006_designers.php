<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Designers extends Migration
{
    
    public function up()
    {
        Schema::create('designers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users')->unsigned();
            $table->decimal('poin', 10, 2);
            $table->enum('jenis_kelamin', ['laki_laki', 'perempuan']);
            $table->string('foto');
            $table->date('tanggal_lahir');
            $table->integer('popularitas');
            $table->timestamps();
            $table->softDeletes();  

            $table->foreign('users')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designers');
    }
}
