<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsetizinterlambat
 * 
 * @property string|null $shif
 * @property Carbon|null $jam
 * @property string|null $diskripsi
 *
 * @package App\Models
 */
class Tblsetizinterlambat extends Model
{
	protected $table = 'tblsetizinterlambat';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jam' => 'date'
	];

	protected $fillable = [
		'shif',
		'jam',
		'diskripsi'
	];
}
