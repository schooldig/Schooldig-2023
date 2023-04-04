<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbluid
 * 
 * @property string $uid
 * @property string $noreg
 *
 * @package App\Models
 */
class Tbluid extends Model
{
	protected $table = 'tbluid';
	protected $primaryKey = 'uid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'noreg'
	];
}
