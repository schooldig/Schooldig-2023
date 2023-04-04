<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblketupdate
 * 
 * @property string $kelas
 * @property string $info
 *
 * @package App\Models
 */
class Tblketupdate extends Model
{
	protected $table = 'tblketupdate';
	protected $primaryKey = 'kelas';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'info'
	];
}
