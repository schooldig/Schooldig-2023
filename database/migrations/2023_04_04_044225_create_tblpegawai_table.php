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
        Schema::create('tblpegawai', function (Blueprint $table) {
            $table->string('kdguru', 6)->primary();
            $table->string('nmpegawai', 40);
            $table->string('nip', 30);
            $table->string('alpegawai', 50);
            $table->string('telp', 15);
            $table->string('jabatan', 30);
            $table->string('deviceid', 40)->default('');
            $table->string('groupacc', 5)->default('TIDAK');
            $table->string('accabsen', 5)->default('TIDAK');
            $table->string('acckurikulum', 5)->default('TIDAK');
            $table->string('viewsiswa', 5)->default('limit');
            $table->string('status', 5)->default('AKTIF');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpegawai');
    }
};
