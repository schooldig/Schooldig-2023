<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcolor
 * 
 * @property int $idcolor
 * @property string $color
 *
 * @package App\Models
 */
class Tblcolor extends Model
{
	protected $table = 'tblcolor';
	protected $primaryKey = 'idcolor';
	public $timestamps = false;

	protected $fillable = [
		'color'
	];
}
