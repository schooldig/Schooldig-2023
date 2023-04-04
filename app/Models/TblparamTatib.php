<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblparamTatib
 * 
 * @property string $jenis
 * @property string|null $diskripsi
 * @property string|null $idpasal
 *
 * @package App\Models
 */
class TblparamTatib extends Model
{
	protected $table = 'tblparam_tatib';
	protected $primaryKey = 'jenis';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'diskripsi',
		'idpasal'
	];
}
