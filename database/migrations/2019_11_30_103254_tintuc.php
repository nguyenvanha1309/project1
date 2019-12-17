<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->primary('maTinTuc');
            $table->string('maTinTuc');
            $table->string('tieuDe');
            $table->string('noiDung');
            $table->date('thoiGian');
            $table->integer('maNV')->unsigned();
            $table->integer('viewTinTuc');
            $table->string('anhTinTuc');
            $table->foreign('maNV')->references('maNV')->on('nhanvien')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tintuc');
    }
}
