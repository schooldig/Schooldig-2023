<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblgroup
 * 
 * @property string $idgroup
 * @property string $groups
 *
 * @package App\Models
 */
class Tblgroup extends Model
{
	protected $table = 'tblgroup';
	protected $primaryKey = 'idgroup';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'groups'
	];
}
