<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->primary('maNV');
            $table->string('maNV');
            $table->string('tenNV');
            $table->string('diaChi');
            $table->integer('SDT');
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
        Schema::dropIfExists('nhanvien');
    }
}
