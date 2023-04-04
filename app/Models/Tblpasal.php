<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpasal
 * 
 * @property int $urut
 * @property string $idkategori
 * @property string $idpasal
 *
 * @package App\Models
 */
class Tblpasal extends Model
{
	protected $table = 'tblpasal';
	protected $primaryKey = 'urut';
	public $timestamps = false;

	protected $fillable = [
		'idkategori',
		'idpasal'
	];
}
