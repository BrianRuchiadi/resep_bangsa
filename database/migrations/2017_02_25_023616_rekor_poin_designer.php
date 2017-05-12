<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RekorPoinDesigner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekor_poin_designer', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('designers')->unsigned();
            $table->integer('jenis_poin')->unsigned();
            $table->decimal('poin', 10, 2);
            $table->timestamps();
            $table->softDeletes();     

            $table->foreign('designers')->references('id')->on('designers')->onDelete('cascade');
            $table->foreign('jenis_poin')->references('id')->on('jenis_poin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekor_poin_designer');
    }
}
