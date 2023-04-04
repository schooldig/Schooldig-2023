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
        Schema::create('tblsetabsen', function (Blueprint $table) {
            $table->string('konseling1', 50)->nullable();
            $table->integer('alpha1')->nullable();
            $table->integer('ijin1')->nullable();
            $table->integer('sakit1')->nullable();
            $table->string('konseling2', 50)->nullable();
            $table->integer('alpha2')->nullable();
            $table->integer('ijin2')->nullable();
            $table->integer('sakit2')->nullable();
            $table->string('po1', 50)->nullable();
            $table->integer('alphap1')->nullable();
            $table->integer('ijinp1')->nullable();
            $table->integer('sakitp1')->nullable();
            $table->string('po2', 50)->nullable();
            $table->integer('alphap2')->nullable();
            $table->integer('ijinp2')->nullable();
            $table->integer('sakitp2')->nullable();
            $table->string('hv1', 50)->nullable();
            $table->integer('alphav1')->nullable();
            $table->integer('ijinv1')->nullable();
            $table->integer('sakitv1')->nullable();
            $table->string('opsiv1', 50)->nullable();
            $table->string('hv2', 50)->nullable();
            $table->integer('alphav2')->nullable();
            $table->integer('ijinv2')->nullable();
            $table->integer('sakitv2')->nullable();
            $table->string('opsiv2', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsetabsen');
    }
};
