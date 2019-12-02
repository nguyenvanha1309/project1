<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lienhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienhe', function (Blueprint $table) {
            $table->primary('LH_id');
            $table->string('LH_id');
            $table->string('noiDungLH');
            $table->string('diaChiLH');
            $table->integer('SDT');
            $table->string('state');
            $table->string('maHV');
            $table->foreign('maHV')->references('maHV')->on('hocvien')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lienhe');
    }
}
