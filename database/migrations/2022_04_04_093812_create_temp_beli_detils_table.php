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
        Schema::create('tempbelidetil', function (Blueprint $table) {
            $table->id('notemp');
            $table->string('no', 20);
            $table->string('kodebarang', 20);
            $table->smallInteger('jlh');
            $table->double('harga');
            $table->double('total');
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
        Schema::dropIfExists('tempbelidetil');
    }
};
