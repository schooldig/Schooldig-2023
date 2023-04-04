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
        Schema::create('tblabsensi', function (Blueprint $table) {
            $table->integer('idabsensi', true);
            $table->dateTime('tgltransaksi');
            $table->date('tglabsen');
            $table->char('noreg', 13)->index('noreg');
            $table->string('kelas', 10);
            $table->string('nmkelas', 10);
            $table->integer('semester')->default(0);
            $table->string('thajaran', 10)->default('0');
            $table->time('time_in')->default('00:00:00');
            $table->time('time_out')->default('00:00:00');
            $table->string('picture_in', 200)->default('');
            $table->string('picture_out', 200)->default('');
            $table->integer('hadir')->default(0);
            $table->integer('ijin')->default(0);
            $table->integer('sakit')->default(0);
            $table->integer('alpha')->default(0);
            $table->integer('pulang')->default(0);
            $table->string('ket', 100);
            $table->string('userx', 100);
            $table->enum('acc', ['Y', 'N'])->default('N');
            $table->dateTime('tglacc');
            $table->string('nmacc', 100)->default('');
            $table->string('lokasi', 300)->default('');
            $table->string('latitude_longtitude_in', 300)->default('');
            $table->string('latitude_longtitude_out', 300)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblabsensi');
    }
};
