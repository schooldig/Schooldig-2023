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
        Schema::create('tblpelanggaran', function (Blueprint $table) {
            $table->integer('idpel', true);
            $table->dateTime('tgl');
            $table->string('deviceid', 30);
            $table->string('noreg', 15);
            $table->string('nama', 30);
            $table->string('kelas', 15);
            $table->string('isi', 500);
            $table->integer('poin')->default(0);
            $table->string('pelapor', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpelanggaran');
    }
};
