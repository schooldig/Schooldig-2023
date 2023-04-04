<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblkartuuid
 * 
 * @property int $id
 * @property string $uid
 * @property Carbon $tanggal
 * @property string $idmesin
 *
 * @package App\Models
 */
class Tblkartuuid extends Model
{
	protected $table = 'tblkartuuid';
	public $timestamps = false;

	protected $casts = [
		'tanggal' => 'date'
	];

	protected $fillable = [
		'uid',
		'tanggal',
		'idmesin'
	];
}
