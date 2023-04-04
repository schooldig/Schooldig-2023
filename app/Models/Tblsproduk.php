<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsproduk
 * 
 * @property int $ids
 * @property string|null $stat
 *
 * @package App\Models
 */
class Tblsproduk extends Model
{
	protected $table = 'tblsproduk';
	protected $primaryKey = 'ids';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ids' => 'int'
	];

	protected $fillable = [
		'stat'
	];
}
