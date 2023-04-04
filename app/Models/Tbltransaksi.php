<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbltransaksi
 * 
 * @property int $idtrans
 * @property Carbon $tanggal
 * @property Carbon $tglreward
 * @property string $nis
 * @property string $noreg
 * @property int $jamke
 * @property string $kelas
 * @property string $nmkelas
 * @property int $smester
 * @property string $noreff
 * @property string $idpasal
 * @property string $thajaran
 * @property int $poinr
 * @property int $poinp
 * @property string $userx
 * @property string $pelapor
 * @property string $ket
 *
 * @package App\Models
 */
class Tbltransaksi extends Model
{
	protected $table = 'tbltransaksi';
	protected $primaryKey = 'idtrans';
	public $timestamps = false;

	protected $casts = [
		'tanggal' => 'date',
		'tglreward' => 'date',
		'jamke' => 'int',
		'smester' => 'int',
		'poinr' => 'int',
		'poinp' => 'int'
	];

	protected $fillable = [
		'tanggal',
		'tglreward',
		'nis',
		'noreg',
		'jamke',
		'kelas',
		'nmkelas',
		'smester',
		'noreff',
		'idpasal',
		'thajaran',
		'poinr',
		'poinp',
		'userx',
		'pelapor',
		'ket'
	];
}
