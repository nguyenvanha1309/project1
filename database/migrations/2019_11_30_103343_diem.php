<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diem', function (Blueprint $table) {
            $table->primary('maDiem');
            $table->string('maDiem');
            $table->string('maDeThi');
            $table->integer('maHV')->unsigned();
            $table->time('do_time');
            $table->integer('diemDatDuoc');
            $table->integer('diemMax');
            $table->string('danhGia');
            $table->string('xepLoai');
            $table->foreign('maHV')->references('maHV')->on('hocvien')->onDelete('cascade');;
            $table->foreign('maDeThi')->references('maDeThi')->on('dethi')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diem');
    }
}
