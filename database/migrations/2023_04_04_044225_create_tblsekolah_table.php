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
        Schema::create('tblsekolah', function (Blueprint $table) {
            $table->string('idsekolah', 50)->primary();
            $table->string('sekolah', 150)->index('NAMA');
            $table->string('alsekolah', 150);
            $table->string('telp', 150);
            $table->string('wasekolah', 150);
            $table->string('email', 150);
            $table->string('kab', 150);
            $table->string('disurat', 150);
            $table->string('alias', 150);
            $table->string('nama_ks', 40);
            $table->string('nip_ks', 30);
            $table->string('nama_waka', 40);
            $table->string('nip_waka', 30);
            $table->string('nama_ketua', 40);
            $table->string('nip_ketua', 30);
            $table->string('ang1', 40);
            $table->string('nip1', 30);
            $table->string('ang2', 40);
            $table->string('nip2', 30);
            $table->string('ang3', 40);
            $table->string('nip3', 30);
            $table->string('ang4', 40);
            $table->string('nip4', 30);
            $table->string('ang5', 40);
            $table->string('nip5', 30);
            $table->string('ang6', 40);
            $table->string('nip6', 30);
            $table->string('ang7', 40);
            $table->string('nip7', 30);
            $table->string('ang8', 40);
            $table->string('nip8', 30);
            $table->string('site_url', 100);
            $table->string('site_logo', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsekolah');
    }
};
