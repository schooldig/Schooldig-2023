<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblversi
 * 
 * @property string $versisql
 * @property string $versiprogram
 *
 * @package App\Models
 */
class Tblversi extends Model
{
	protected $table = 'tblversi';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'versisql',
		'versiprogram'
	];
}
