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
        Schema::create('tblpenghargaan', function (Blueprint $table) {
            $table->integer('idpen', true);
            $table->dateTime('tgl');
            $table->string('deviceid', 30);
            $table->string('noreg', 15);
            $table->string('nama', 30);
            $table->string('kelas', 15);
            $table->string('idpasal', 4)->default('');
            $table->string('isi', 500)->default('');
            $table->integer('poin')->default(0);
            $table->string('pelapor', 40)->default('');
            $table->string('ket', 80)->default('');
            $table->dateTime('tglacc')->default('1970-01-01 00:00:00');
            $table->string('nmacc', 40)->default('');
            $table->string('acc', 5)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpenghargaan');
    }
};
