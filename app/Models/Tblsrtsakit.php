<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsrtsakit
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
 * @property int $tsakit
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
class Tblsrtsakit extends Model
{
	protected $table = 'tblsrtsakit';
	protected $primaryKey = 'idsurat';
	public $timestamps = false;

	protected $casts = [
		'tglsurat' => 'date',
		'tglund' => 'date',
		'tsakit' => 'int',
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
		'tsakit',
		'sanksi',
		'idtrans',
		'userx',
		'walimurid',
		'tglrespon',
		'hasilrespon',
		'petugas'
	];
}
