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
        Schema::create('tblsrtalpa', function (Blueprint $table) {
            $table->bigInteger('idsurat', true);
            $table->string('nosurat', 50)->default('');
            $table->string('hal', 50)->default('');
            $table->date('tglsurat');
            $table->date('tglund');
            $table->string('noreg', 20)->default('');
            $table->string('nama', 50)->default('');
            $table->string('nmkelas', 50)->default('');
            $table->string('thajaran', 50)->default('0');
            $table->integer('talpha')->default(0);
            $table->string('sanksi', 50)->default('0');
            $table->bigInteger('idtrans')->default(0);
            $table->string('userx', 50)->default('');
            $table->string('walimurid', 50)->default('');
            $table->date('tglrespon');
            $table->string('hasilrespon', 100);
            $table->string('petugas', 50)->default('');
            $table->string('bukti', 50)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsrtalpa');
    }
};
