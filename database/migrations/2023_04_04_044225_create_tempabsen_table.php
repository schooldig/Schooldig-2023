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
        Schema::create('tempabsen', function (Blueprint $table) {
            $table->integer('idabsensi')->default(0);
            $table->dateTime('tgltransaksi');
            $table->date('tglabsen')->nullable();
            $table->char('noreg', 13);
            $table->string('kelas', 10);
            $table->string('nmkelas', 10);
            $table->integer('semester')->default(0);
            $table->string('thajaran', 10)->default('0');
            $table->integer('hadir')->default(0);
            $table->integer('ijin')->default(0);
            $table->integer('sakit')->default(0);
            $table->integer('alpha')->default(0);
            $table->integer('pulang')->default(0);
            $table->string('ket', 100);
            $table->string('userx', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempabsen');
    }
};
