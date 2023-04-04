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
        Schema::create('tblizin', function (Blueprint $table) {
            $table->integer('idizin', true);
            $table->string('noreg', 50)->default('');
            $table->date('mulai');
            $table->string('alasan', 10);
            $table->string('keterangan', 100);
            $table->integer('statusizin')->default(3);
            $table->string('namaacc', 50);
            $table->string('bukti', 150);
            $table->string('ditolak', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblizin');
    }
};
