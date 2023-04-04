<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tempabsen
 * 
 * @property int $idabsensi
 * @property Carbon $tgltransaksi
 * @property Carbon|null $tglabsen
 * @property string $noreg
 * @property string $kelas
 * @property string $nmkelas
 * @property int $semester
 * @property string $thajaran
 * @property int $hadir
 * @property int $ijin
 * @property int $sakit
 * @property int $alpha
 * @property int $pulang
 * @property string $ket
 * @property string $userx
 *
 * @package App\Models
 */
class Tempabsen extends Model
{
	protected $table = 'tempabsen';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idabsensi' => 'int',
		'tgltransaksi' => 'date',
		'tglabsen' => 'date',
		'semester' => 'int',
		'hadir' => 'int',
		'ijin' => 'int',
		'sakit' => 'int',
		'alpha' => 'int',
		'pulang' => 'int'
	];

	protected $fillable = [
		'idabsensi',
		'tgltransaksi',
		'tglabsen',
		'noreg',
		'kelas',
		'nmkelas',
		'semester',
		'thajaran',
		'hadir',
		'ijin',
		'sakit',
		'alpha',
		'pulang',
		'ket',
		'userx'
	];
}
