<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsubpasal
 * 
 * @property string $idpasal
 * @property string $pasal
 * @property int $skormin
 * @property int $skormax
 * @property string $thnajaran
 *
 * @package App\Models
 */
class Tblsubpasal extends Model
{
	protected $table = 'tblsubpasal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'skormin' => 'int',
		'skormax' => 'int'
	];

	protected $fillable = [
		'idpasal',
		'pasal',
		'skormin',
		'skormax',
		'thnajaran'
	];
}
