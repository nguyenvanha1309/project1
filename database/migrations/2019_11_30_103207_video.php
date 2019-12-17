<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Video extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->primary('maVD');
            $table->string('maVD');
            $table->string('tenVD');
            $table->string('linkVD');
            $table->string('maBH');
            $table->integer('viewVD');
            $table->string('anhVD');
            $table->string('motaVD');
            $table->string('noidungVD');
            $table->foreign('maBH')->references('maBH')->on('baihoc')->onDelete('cascade');;
           
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
}
