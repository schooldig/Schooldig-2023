<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblinfo
 * 
 * @property string $judul
 * @property string $info
 * @property string $aktif
 *
 * @package App\Models
 */
class Tblinfo extends Model
{
	protected $table = 'tblinfo';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'judul',
		'info',
		'aktif'
	];
}
