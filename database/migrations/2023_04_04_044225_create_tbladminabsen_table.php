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
        Schema::create('tbladminabsen', function (Blueprint $table) {
            $table->integer('idadmin', true);
            $table->string('noreg', 13)->unique('noreg');
            $table->string('username', 10)->unique('username');
            $table->string('kode', 10);
            $table->string('bagian', 20);
            $table->string('deviceid', 50)->unique('deviceid');
            $table->time('awal');
            $table->time('akhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbladminabsen');
    }
};
