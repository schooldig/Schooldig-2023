<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsetjam
 * 
 * @property int $id_jam
 * @property string $shif
 * @property string $nama_jam
 * @property Carbon $time_in
 * @property Carbon $limit_in
 * @property Carbon $time_out
 * @property Carbon $limit_out
 * @property int $statusjam
 *
 * @package App\Models
 */
class Tblsetjam extends Model
{
	protected $table = 'tblsetjam';
	protected $primaryKey = 'id_jam';
	public $timestamps = false;

	protected $casts = [
		'time_in' => 'date',
		'limit_in' => 'date',
		'time_out' => 'date',
		'limit_out' => 'date',
		'statusjam' => 'int'
	];

	protected $fillable = [
		'shif',
		'nama_jam',
		'time_in',
		'limit_in',
		'time_out',
		'limit_out',
		'statusjam'
	];
}
