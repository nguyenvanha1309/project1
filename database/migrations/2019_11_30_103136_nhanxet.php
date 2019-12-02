<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nhanxet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanxet', function (Blueprint $table) {
            $table->primary('NX_id');
            $table->string('NX_id');
            $table->string('ndNhanXet');
            $table->string('maBH');
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
        Schema::dropIfExists('nhanxet');
    }
}
