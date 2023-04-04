<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsurat
 * 
 * @property int $idsurat
 * @property string $nosurat
 * @property string $hal
 * @property Carbon $tglsurat
 * @property Carbon $tglund
 * @property string $noreg
 * @property string $nama
 * @property string $nmkelas
 * @property string $thajaran
 * @property int $tpoin
 * @property string $sanksi
 * @property int $idtrans
 * @property Carbon $mskors
 * @property Carbon $askors
 * @property string $userx
 * @property string $walimurid
 * @property Carbon $tglrespon
 * @property string $petugas
 * @property string $keterangan
 * @property string $bukti
 *
 * @package App\Models
 */
class Tblsurat extends Model
{
	protected $table = 'tblsurat';
	protected $primaryKey = 'idsurat';
	public $timestamps = false;

	protected $casts = [
		'tglsurat' => 'date',
		'tglund' => 'date',
		'tpoin' => 'int',
		'idtrans' => 'int',
		'mskors' => 'date',
		'askors' => 'date',
		'tglrespon' => 'date'
	];

	protected $fillable = [
		'nosurat',
		'hal',
		'tglsurat',
		'tglund',
		'noreg',
		'nama',
		'nmkelas',
		'thajaran',
		'tpoin',
		'sanksi',
		'idtrans',
		'mskors',
		'askors',
		'userx',
		'walimurid',
		'tglrespon',
		'petugas',
		'keterangan',
		'bukti'
	];
}
