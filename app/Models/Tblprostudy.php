<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblprostudy
 * 
 * @property int $idpro
 * @property int $idbid
 * @property string $program
 *
 * @package App\Models
 */
class Tblprostudy extends Model
{
	protected $table = 'tblprostudy';
	protected $primaryKey = 'idpro';
	public $timestamps = false;

	protected $casts = [
		'idbid' => 'int'
	];

	protected $fillable = [
		'idbid',
		'program'
	];
}
