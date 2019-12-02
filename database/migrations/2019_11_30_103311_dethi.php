<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dethi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dethi', function (Blueprint $table) {
            $table->primary('maDeThi');
            $table->string('maDeThi');
            $table->string('maCD');
            $table->string('tieuDe');
            $table->string('question');
            $table->string('answer');
            $table->time('thoiGian');
            $table->string('maHV');
            $table->foreign('maCD')->references('maCD')->on('chude')->onDelete('cascade');;
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
        Schema::dropIfExists('dethi');
    }
}
