<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsrtijin
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
 * @property int $tijin
 * @property string $sanksi
 * @property int $idtrans
 * @property string $userx
 * @property string $walimurid
 * @property Carbon $tglrespon
 * @property string $hasilrespon
 * @property string $petugas
 *
 * @package App\Models
 */
class Tblsrtijin extends Model
{
	protected $table = 'tblsrtijin';
	protected $primaryKey = 'idsurat';
	public $timestamps = false;

	protected $casts = [
		'tglsurat' => 'date',
		'tglund' => 'date',
		'tijin' => 'int',
		'idtrans' => 'int',
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
		'tijin',
		'sanksi',
		'idtrans',
		'userx',
		'walimurid',
		'tglrespon',
		'hasilrespon',
		'petugas'
	];
}
