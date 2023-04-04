<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbltidakhadirguru
 * 
 * @property int $idtidakhadir
 * @property Carbon|null $tanggal
 * @property string|null $thajaran
 * @property string|null $noreg
 * @property string|null $pelapor
 * @property string|null $kelas
 * @property string|null $kdguru
 * @property string|null $mapel
 * @property string|null $jamke
 * @property int|null $jumlahjam
 * @property string|null $keterangan
 * @property string|null $memberitugas
 * @property string|null $tugasguru
 *
 * @package App\Models
 */
class Tbltidakhadirguru extends Model
{
	protected $table = 'tbltidakhadirguru';
	protected $primaryKey = 'idtidakhadir';
	public $timestamps = false;

	protected $casts = [
		'tanggal' => 'date',
		'jumlahjam' => 'int'
	];

	protected $fillable = [
		'tanggal',
		'thajaran',
		'noreg',
		'pelapor',
		'kelas',
		'kdguru',
		'mapel',
		'jamke',
		'jumlahjam',
		'keterangan',
		'memberitugas',
		'tugasguru'
	];
}
