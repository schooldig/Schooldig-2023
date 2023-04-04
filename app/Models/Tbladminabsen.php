<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbladminabsen
 * 
 * @property int $idadmin
 * @property string $noreg
 * @property string $username
 * @property string $kode
 * @property string $bagian
 * @property string $deviceid
 * @property Carbon $awal
 * @property Carbon $akhir
 *
 * @package App\Models
 */
class Tbladminabsen extends Model
{
	protected $table = 'tbladminabsen';
	protected $primaryKey = 'idadmin';
	public $timestamps = false;

	protected $casts = [
		'awal' => 'date',
		'akhir' => 'date'
	];

	protected $fillable = [
		'noreg',
		'username',
		'kode',
		'bagian',
		'deviceid',
		'awal',
		'akhir'
	];
}
