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
        Schema::create('tbllokasi', function (Blueprint $table) {
            $table->integer('idlokasi', true);
            $table->string('lokasi', 50);
            $table->string('alamat', 100);
            $table->string('lat', 100);
            $table->string('lon', 100);
            $table->string('batas', 100);
            $table->string('mile', 100)->default('1609');
            $table->string('satuan', 100)->default('M');
            $table->enum('aktif', ['Y', 'N'])->default('Y');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbllokasi');
    }
};
