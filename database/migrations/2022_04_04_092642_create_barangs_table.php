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
        Schema::create('tbbarang', function (Blueprint $table) {
            $table->string('kodebarang')->primary();
            $table->string('nama', 100);
            $table->string('jenis', 100);
            $table->string('merk', 100);
            $table->string('satuan', 20);
            $table->smallInteger('jlh_stok');
            $table->double('hargajual');
            $table->double('hargabeli');
            $table->text('ket');
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
        Schema::dropIfExists('tbbarang');
    }
};
