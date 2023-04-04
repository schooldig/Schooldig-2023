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
        Schema::create('tblsiswa', function (Blueprint $table) {
            $table->string('noreg', 13)->primary();
            $table->string('nis', 20)->default('');
            $table->string('nama', 50)->default('');
            $table->string('alamat', 150)->default('');
            $table->string('hpsiswa', 14)->default('');
            $table->string('hportu', 100)->default('');
            $table->string('gender', 10)->default('');
            $table->string('kelas', 3)->default('');
            $table->string('nmkelas', 10)->default('');
            $table->integer('semester')->default(1);
            $table->string('thnpelajaran', 9)->default('');
            $table->string('statusx', 10)->default('1');
            $table->enum('protek', ['Y', 'N'])->default('Y');
            $table->char('opsi', 1)->default('M');
            $table->enum('cek', ['Y', 'N'])->default('N');
            $table->string('deviceid', 30)->default('');
            $table->string('password', 30)->default('');
            $table->string('created_login', 200)->default('');
            $table->string('created_cookies', 200)->default('');
            $table->string('photo', 200)->default('');
            $table->smallInteger('idlokasi')->default(1);
            $table->smallInteger('pengurus')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsiswa');
    }
};
