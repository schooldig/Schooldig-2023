<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpenghargaan
 * 
 * @property int $idpen
 * @property Carbon $tgl
 * @property string $deviceid
 * @property string $noreg
 * @property string $nama
 * @property string $kelas
 * @property string $idpasal
 * @property string $isi
 * @property int $poin
 * @property string $pelapor
 * @property string $ket
 * @property Carbon $tglacc
 * @property string $nmacc
 * @property string $acc
 *
 * @package App\Models
 */
class Tblpenghargaan extends Model
{
	protected $table = 'tblpenghargaan';
	protected $primaryKey = 'idpen';
	public $timestamps = false;

	protected $casts = [
		'tgl' => 'date',
		'poin' => 'int',
		'tglacc' => 'date'
	];

	protected $fillable = [
		'tgl',
		'deviceid',
		'noreg',
		'nama',
		'kelas',
		'idpasal',
		'isi',
		'poin',
		'pelapor',
		'ket',
		'tglacc',
		'nmacc',
		'acc'
	];
}
