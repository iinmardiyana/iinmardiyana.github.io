<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paketsatus', function (Blueprint $table) {
            $table->id();
            $table->string('kd_barang');
            $table->string('nama_barang');
            $table->string('ket_barang')->nullable();
            $table->bigInteger('harga_barang');
            $table->integer('id_outlet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paketsatus');
    }
};
