<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khoahoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoahoc', function (Blueprint $table) {
            $table->primary('maKH');
            $table->string('maKH');
            $table->string('tenKH');
            $table->string('moTa');
            $table->string('noiDung');
            $table->string('diaChiHoc');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('soLuongHV');
            $table->string('tenGV');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khoahoc');
    }
}
