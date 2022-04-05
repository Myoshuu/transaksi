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
        Schema::create('tbjual', function (Blueprint $table) {
            $table->string('no', 20)->primary();
            $table->date('tgl');
            $table->string('kodeuser', 20);
            $table->string('kodesales', 20);
            $table->double('subtotal');
            $table->double('disc');
            $table->double('pajak');
            $table->double('grandtotal');
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
        Schema::dropIfExists('tbjual');
    }
};
