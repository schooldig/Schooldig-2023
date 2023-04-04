<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpelanggaran
 * 
 * @property int $idpel
 * @property Carbon $tgl
 * @property string $deviceid
 * @property string $noreg
 * @property string $nama
 * @property string $kelas
 * @property string $isi
 * @property int $poin
 * @property string $pelapor
 *
 * @package App\Models
 */
class Tblpelanggaran extends Model
{
	protected $table = 'tblpelanggaran';
	protected $primaryKey = 'idpel';
	public $timestamps = false;

	protected $casts = [
		'tgl' => 'date',
		'poin' => 'int'
	];

	protected $fillable = [
		'tgl',
		'deviceid',
		'noreg',
		'nama',
		'kelas',
		'isi',
		'poin',
		'pelapor'
	];
}
