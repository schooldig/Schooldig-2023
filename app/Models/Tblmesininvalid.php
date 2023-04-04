<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblmesininvalid
 * 
 * @property string $idmesin
 * @property string|null $uid
 * @property Carbon|null $tanggal
 *
 * @package App\Models
 */
class Tblmesininvalid extends Model
{
	protected $table = 'tblmesininvalid';
	protected $primaryKey = 'idmesin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tanggal' => 'date'
	];

	protected $fillable = [
		'uid',
		'tanggal'
	];
}
