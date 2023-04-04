<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblabsensi
 * 
 * @property int $idabsensi
 * @property Carbon $tgltransaksi
 * @property Carbon $tglabsen
 * @property string $noreg
 * @property string $kelas
 * @property string $nmkelas
 * @property int $semester
 * @property string $thajaran
 * @property Carbon $time_in
 * @property Carbon $time_out
 * @property string $picture_in
 * @property string $picture_out
 * @property int $hadir
 * @property int $ijin
 * @property int $sakit
 * @property int $alpha
 * @property int $pulang
 * @property string $ket
 * @property string $userx
 * @property string $acc
 * @property Carbon $tglacc
 * @property string $nmacc
 * @property string $lokasi
 * @property string $latitude_longtitude_in
 * @property string $latitude_longtitude_out
 *
 * @package App\Models
 */
class Tblabsensi extends Model
{
	protected $table = 'tblabsensi';
	protected $primaryKey = 'idabsensi';
	public $timestamps = false;

	protected $casts = [
		'tgltransaksi' => 'date',
		'tglabsen' => 'date',
		'semester' => 'int',
		'time_in' => 'date',
		'time_out' => 'date',
		'hadir' => 'int',
		'ijin' => 'int',
		'sakit' => 'int',
		'alpha' => 'int',
		'pulang' => 'int',
		'tglacc' => 'date'
	];

	protected $fillable = [
		'tgltransaksi',
		'tglabsen',
		'noreg',
		'kelas',
		'nmkelas',
		'semester',
		'thajaran',
		'time_in',
		'time_out',
		'picture_in',
		'picture_out',
		'hadir',
		'ijin',
		'sakit',
		'alpha',
		'pulang',
		'ket',
		'userx',
		'acc',
		'tglacc',
		'nmacc',
		'lokasi',
		'latitude_longtitude_in',
		'latitude_longtitude_out'
	];
}
