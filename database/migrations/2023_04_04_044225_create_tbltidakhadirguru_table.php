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
        Schema::create('tbltidakhadirguru', function (Blueprint $table) {
            $table->integer('idtidakhadir', true);
            $table->dateTime('tanggal')->nullable();
            $table->string('thajaran', 10)->nullable();
            $table->string('noreg', 13)->nullable();
            $table->string('pelapor', 80)->nullable();
            $table->string('kelas', 10)->nullable();
            $table->string('kdguru', 80)->nullable();
            $table->string('mapel', 90)->nullable();
            $table->string('jamke', 10)->nullable();
            $table->unsignedInteger('jumlahjam')->nullable();
            $table->string('keterangan', 100)->nullable();
            $table->string('memberitugas', 5)->nullable();
            $table->string('tugasguru', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbltidakhadirguru');
    }
};
