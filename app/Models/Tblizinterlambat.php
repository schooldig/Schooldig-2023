<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblizinterlambat
 * 
 * @property int $idizinterlambat
 * @property string $noreg
 * @property Carbon $tglizin
 * @property Carbon $jamterlambat
 * @property string $alasan
 * @property int $statusizin
 * @property string $namaacc
 * @property string $ditolak
 *
 * @package App\Models
 */
class Tblizinterlambat extends Model
{
	protected $table = 'tblizinterlambat';
	protected $primaryKey = 'idizinterlambat';
	public $timestamps = false;

	protected $casts = [
		'tglizin' => 'date',
		'jamterlambat' => 'date',
		'statusizin' => 'int'
	];

	protected $fillable = [
		'noreg',
		'tglizin',
		'jamterlambat',
		'alasan',
		'statusizin',
		'namaacc',
		'ditolak'
	];
}
