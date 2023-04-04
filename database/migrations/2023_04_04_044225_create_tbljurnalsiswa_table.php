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
        Schema::create('tbljurnalsiswa', function (Blueprint $table) {
            $table->integer('idjurnalsis', true);
            $table->integer('idjurnal');
            $table->string('siswa', 125)->nullable();
            $table->string('ketsiswa', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbljurnalsiswa');
    }
};
