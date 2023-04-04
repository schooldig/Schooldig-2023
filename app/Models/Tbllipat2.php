<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbllipat2
 * 
 * @property int|null $lipat
 *
 * @package App\Models
 */
class Tbllipat2 extends Model
{
	protected $table = 'tbllipat2';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lipat' => 'int'
	];

	protected $fillable = [
		'lipat'
	];
}
