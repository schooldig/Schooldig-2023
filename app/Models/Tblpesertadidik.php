<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpesertadidik
 * 
 * @property string $noreg
 * @property string $nobk
 * @property string $noinduk
 * @property string $nim
 * @property string $namalengkap
 * @property string $panggilan
 * @property string $jk
 * @property string $nik
 * @property string $tmp_lahir
 * @property string $tgl_lahir
 * @property string $agama
 * @property string $warganegara
 * @property string $anak
 * @property string $dari
 * @property string $sdrtiri
 * @property string $jenisanak
 * @property string $bahasa
 * @property string $butuhkusus
 * @property string $hp1
 * @property string $deviceid
 * @property string $email
 * @property string $psd
 * @property string $sttbsd
 * @property string $lulussd
 * @property string $psmp
 * @property string $sttbsmp
 * @property string $lulussmp
 * @property string $nembi
 * @property string $nemmtk
 * @property string $neminggris
 * @property string $nemipa
 * @property string $pindahsma
 * @property string $alasan
 * @property string $tinggi
 * @property string $berat
 * @property string $goldarah
 * @property string $kelainan
 * @property string $pkronis
 * @property string $pringan
 * @property string $dusun
 * @property string $rt
 * @property string $rw
 * @property string $desa
 * @property string $kodepos
 * @property string $kec
 * @property string $kab
 * @property string $prov
 * @property string $tinggal
 * @property string $transport
 * @property string $jarak
 * @property string $waktu
 * @property string $ayah
 * @property string $nikayah
 * @property string $tmp_lahirayah
 * @property string $tgl_lahirayah
 * @property string $agamaayah
 * @property string $negaraayah
 * @property string $didikayah
 * @property string $kerjaayah
 * @property int $pendayah
 * @property string $ketayah
 * @property string $hpayah
 * @property string $dusunayah
 * @property string $rtayah
 * @property string $rwayah
 * @property string $desaayah
 * @property string $kodeposayah
 * @property string $kecayah
 * @property string $kabayah
 * @property string $provayah
 * @property string $ibu
 * @property string $nikibu
 * @property string $tmp_lahiribu
 * @property string $tgl_lahiribu
 * @property string $agamaibu
 * @property string $negaraibu
 * @property string $didikibu
 * @property string $kerjaibu
 * @property int $pendibu
 * @property string $ketibu
 * @property string $hpibu
 * @property string $dusunibu
 * @property string $rtibu
 * @property string $rwibu
 * @property string $desaibu
 * @property string $kodeposibu
 * @property string $kecibu
 * @property string $kabibu
 * @property string $provibu
 * @property string $wali
 * @property string $nikwali
 * @property string $jkwali
 * @property string $tmp_lahirwali
 * @property string $tgl_lahirwali
 * @property string $agamawali
 * @property string $negarawali
 * @property string $kerjawali
 * @property string $didikwali
 * @property int $pendwali
 * @property string $ketwali
 * @property string $hubwali
 * @property string $hpwali
 * @property string $dusunwali
 * @property string $rtwali
 * @property string $rwwali
 * @property string $desawali
 * @property string $kodeposwali
 * @property string $kecwali
 * @property string $kabwali
 * @property string $provwali
 * @property string $kks
 * @property string $kps
 * @property string $kip
 * @property string $kis
 * @property string $pkh
 * @property string $telpsdr
 * @property string $nmsdr
 * @property string $telpttg
 * @property string $nmttg
 *
 * @package App\Models
 */
class Tblpesertadidik extends Model
{
	protected $table = 'tblpesertadidik';
	protected $primaryKey = 'noreg';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pendayah' => 'int',
		'pendibu' => 'int',
		'pendwali' => 'int'
	];

	protected $fillable = [
		'nobk',
		'noinduk',
		'nim',
		'namalengkap',
		'panggilan',
		'jk',
		'nik',
		'tmp_lahir',
		'tgl_lahir',
		'agama',
		'warganegara',
		'anak',
		'dari',
		'sdrtiri',
		'jenisanak',
		'bahasa',
		'butuhkusus',
		'hp1',
		'deviceid',
		'email',
		'psd',
		'sttbsd',
		'lulussd',
		'psmp',
		'sttbsmp',
		'lulussmp',
		'nembi',
		'nemmtk',
		'neminggris',
		'nemipa',
		'pindahsma',
		'alasan',
		'tinggi',
		'berat',
		'goldarah',
		'kelainan',
		'pkronis',
		'pringan',
		'dusun',
		'rt',
		'rw',
		'desa',
		'kodepos',
		'kec',
		'kab',
		'prov',
		'tinggal',
		'transport',
		'jarak',
		'waktu',
		'ayah',
		'nikayah',
		'tmp_lahirayah',
		'tgl_lahirayah',
		'agamaayah',
		'negaraayah',
		'didikayah',
		'kerjaayah',
		'pendayah',
		'ketayah',
		'hpayah',
		'dusunayah',
		'rtayah',
		'rwayah',
		'desaayah',
		'kodeposayah',
		'kecayah',
		'kabayah',
		'provayah',
		'ibu',
		'nikibu',
		'tmp_lahiribu',
		'tgl_lahiribu',
		'agamaibu',
		'negaraibu',
		'didikibu',
		'kerjaibu',
		'pendibu',
		'ketibu',
		'hpibu',
		'dusunibu',
		'rtibu',
		'rwibu',
		'desaibu',
		'kodeposibu',
		'kecibu',
		'kabibu',
		'provibu',
		'wali',
		'nikwali',
		'jkwali',
		'tmp_lahirwali',
		'tgl_lahirwali',
		'agamawali',
		'negarawali',
		'kerjawali',
		'didikwali',
		'pendwali',
		'ketwali',
		'hubwali',
		'hpwali',
		'dusunwali',
		'rtwali',
		'rwwali',
		'desawali',
		'kodeposwali',
		'kecwali',
		'kabwali',
		'provwali',
		'kks',
		'kps',
		'kip',
		'kis',
		'pkh',
		'telpsdr',
		'nmsdr',
		'telpttg',
		'nmttg'
	];
}
