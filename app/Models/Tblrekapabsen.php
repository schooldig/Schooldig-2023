<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblrekapabsen
 * 
 * @property Carbon|null $tanggal
 * @property string|null $shif
 * @property int|null $rekap
 *
 * @package App\Models
 */
class Tblrekapabsen extends Model
{
	protected $table = 'tblrekapabsen';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tanggal' => 'date',
		'rekap' => 'int'
	];

	protected $fillable = [
		'tanggal',
		'shif',
		'rekap'
	];
}
