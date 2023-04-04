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
        Schema::create('tblpesertadidik', function (Blueprint $table) {
            $table->string('noreg', 15)->primary();
            $table->string('nobk', 20)->default('');
            $table->string('noinduk', 20)->default('');
            $table->string('nim', 20)->default('');
            $table->string('namalengkap', 100)->default('');
            $table->string('panggilan', 20)->default('');
            $table->string('jk', 20)->default('');
            $table->string('nik', 25)->default('');
            $table->string('tmp_lahir', 50)->default('');
            $table->string('tgl_lahir', 50)->default('0000-00-00');
            $table->string('agama', 20)->default('');
            $table->string('warganegara', 50)->default('');
            $table->string('anak', 6)->default('');
            $table->string('dari', 6)->default('');
            $table->string('sdrtiri', 50)->default('');
            $table->string('jenisanak', 50)->default('');
            $table->string('bahasa', 50)->default('');
            $table->string('butuhkusus', 50)->default('');
            $table->string('hp1', 20)->default('');
            $table->string('deviceid', 50)->default('');
            $table->string('email', 50)->default('');
            $table->string('psd', 50)->default('');
            $table->string('sttbsd', 50)->default('');
            $table->string('lulussd', 50)->default('');
            $table->string('psmp', 50)->default('');
            $table->string('sttbsmp', 50)->default('');
            $table->string('lulussmp', 50)->default('');
            $table->string('nembi', 50)->default('');
            $table->string('nemmtk', 50)->default('');
            $table->string('neminggris', 50)->default('');
            $table->string('nemipa', 50)->default('');
            $table->string('pindahsma', 50)->default('');
            $table->string('alasan', 50)->default('');
            $table->string('tinggi', 6)->default('');
            $table->string('berat', 6)->default('');
            $table->string('goldarah', 50)->default('');
            $table->string('kelainan', 50)->default('');
            $table->string('pkronis', 50)->default('');
            $table->string('pringan', 50)->default('');
            $table->string('dusun', 50)->default('');
            $table->string('rt', 4)->default('');
            $table->string('rw', 4)->default('');
            $table->string('desa', 50)->default('');
            $table->string('kodepos', 15)->default('');
            $table->string('kec', 50)->default('');
            $table->string('kab', 50)->default('');
            $table->string('prov', 50)->default('');
            $table->string('tinggal', 50)->default('');
            $table->string('transport', 50)->default('');
            $table->string('jarak', 6)->default('');
            $table->string('waktu', 6)->default('');
            $table->string('ayah', 50)->default('');
            $table->string('nikayah', 50)->default('');
            $table->string('tmp_lahirayah', 50)->default('');
            $table->string('tgl_lahirayah', 50)->default('0000-00-00');
            $table->string('agamaayah', 50)->default('0000-00-00');
            $table->string('negaraayah', 50)->default('');
            $table->string('didikayah', 50)->default('');
            $table->string('kerjaayah', 50)->default('');
            $table->integer('pendayah')->default(0);
            $table->string('ketayah', 50)->default('');
            $table->string('hpayah', 50)->default('');
            $table->string('dusunayah', 50)->default('');
            $table->string('rtayah', 4)->default('');
            $table->string('rwayah', 4)->default('');
            $table->string('desaayah', 50)->default('');
            $table->string('kodeposayah', 15)->default('');
            $table->string('kecayah', 50)->default('');
            $table->string('kabayah', 50)->default('');
            $table->string('provayah', 50)->default('');
            $table->string('ibu', 50)->default('');
            $table->string('nikibu', 50)->default('');
            $table->string('tmp_lahiribu', 50)->default('');
            $table->string('tgl_lahiribu', 50)->default('0000-00-00');
            $table->string('agamaibu', 50)->default('');
            $table->string('negaraibu', 50)->default('');
            $table->string('didikibu', 50)->default('');
            $table->string('kerjaibu', 50)->default('');
            $table->integer('pendibu')->default(0);
            $table->string('ketibu', 50)->default('');
            $table->string('hpibu', 50)->default('');
            $table->string('dusunibu', 50)->default('');
            $table->string('rtibu', 4)->default('');
            $table->string('rwibu', 4)->default('');
            $table->string('desaibu', 50)->default('');
            $table->string('kodeposibu', 15)->default('');
            $table->string('kecibu', 50)->default('');
            $table->string('kabibu', 50)->default('');
            $table->string('provibu', 50)->default('');
            $table->string('wali', 50)->default('');
            $table->string('nikwali', 50)->default('');
            $table->string('jkwali', 50)->default('');
            $table->string('tmp_lahirwali', 50)->default('');
            $table->string('tgl_lahirwali', 50)->default('0000-00-00');
            $table->string('agamawali', 50)->default('0000-00-00');
            $table->string('negarawali', 50)->default('');
            $table->string('kerjawali', 50)->default('');
            $table->string('didikwali', 50)->default('');
            $table->integer('pendwali')->default(0);
            $table->string('ketwali', 50)->default('');
            $table->string('hubwali', 50)->default('');
            $table->string('hpwali', 50)->default('');
            $table->string('dusunwali', 50)->default('');
            $table->string('rtwali', 4)->default('');
            $table->string('rwwali', 4)->default('');
            $table->string('desawali', 50)->default('');
            $table->string('kodeposwali', 15)->default('');
            $table->string('kecwali', 50)->default('');
            $table->string('kabwali', 50)->default('');
            $table->string('provwali', 50)->default('');
            $table->string('kks', 50)->default('');
            $table->string('kps', 50)->default('');
            $table->string('kip', 50)->default('');
            $table->string('kis', 50)->default('');
            $table->string('pkh', 50)->default('');
            $table->string('telpsdr', 50)->default('');
            $table->string('nmsdr', 50)->default('');
            $table->string('telpttg', 50)->default('');
            $table->string('nmttg', 50)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpesertadidik');
    }
};
