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
        Schema::create('tbldeltransaksi', function (Blueprint $table) {
            $table->bigInteger('idtrans', true);
            $table->dateTime('tanggal');
            $table->date('tglreward');
            $table->string('nis', 20);
            $table->string('noreg', 13);
            $table->integer('jamke')->default(0);
            $table->string('kelas', 4);
            $table->string('nmkelas', 10);
            $table->integer('smester')->default(0);
            $table->string('noreff', 20);
            $table->string('idpasal', 4);
            $table->string('thajaran', 9);
            $table->integer('poinr')->default(0);
            $table->integer('poinp')->default(0);
            $table->string('userx', 100);
            $table->string('pelapor', 100);
            $table->string('ket', 100);
            $table->dateTime('tglhapus');
            $table->string('alasan', 100);
            $table->string('userh', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbldeltransaksi');
    }
};
