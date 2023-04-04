<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbllipat3
 * 
 * @property int|null $lipat
 *
 * @package App\Models
 */
class Tbllipat3 extends Model
{
	protected $table = 'tbllipat3';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lipat' => 'int'
	];

	protected $fillable = [
		'lipat'
	];
}
