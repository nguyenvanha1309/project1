<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baihoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baihoc', function (Blueprint $table) {
            $table->primary('maBH');
            $table->string('maBH');
            $table->string('tenBH');
            $table->string('maCD');
            $table->string('tieuDe');
            $table->string('noiDung');
            $table->integer('soLuotXem');
            $table->foreign('maCD')->references('maCD')->on('chude')->onDelete('cascade');;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baihoc');
    }
}
