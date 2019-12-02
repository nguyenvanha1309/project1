<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hocvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocvien', function (Blueprint $table) {
            $table->primary('maHV');
            $table->string('maHV');
            $table->string('tenHV');
            $table->string('diaChi');
            $table->integer('SDT');
            $table->date('ngaySinh');
            $table->string('gioiTinh');
            $table->string('email');
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');;



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hocvien');
    }
}
