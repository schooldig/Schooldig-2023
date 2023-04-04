<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblslogin
 * 
 * @property Carbon $timex
 * @property string $host
 * @property string $userx
 * @property string $status
 *
 * @package App\Models
 */
class Tblslogin extends Model
{
	protected $table = 'tblslogin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'timex' => 'date'
	];

	protected $fillable = [
		'timex',
		'host',
		'userx',
		'status'
	];
}
