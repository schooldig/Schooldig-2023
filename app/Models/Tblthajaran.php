<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblthajaran
 * 
 * @property int $idth
 * @property string $thajaran
 * @property string $aktif
 * @property string $ttp
 *
 * @package App\Models
 */
class Tblthajaran extends Model
{
	protected $table = 'tblthajaran';
	protected $primaryKey = 'idth';
	public $timestamps = false;

	protected $fillable = [
		'thajaran',
		'aktif',
		'ttp'
	];
}
