<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbllogmesin
 * 
 * @property string|null $log
 *
 * @package App\Models
 */
class Tbllogmesin extends Model
{
	protected $table = 'tbllogmesin';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'log'
	];
}
