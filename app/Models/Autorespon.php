<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autorespon
 * 
 * @property int $id
 * @property string $ktkunci
 * @property string $respon
 * @property string $aktif
 *
 * @package App\Models
 */
class Autorespon extends Model
{
	protected $table = 'autorespon';
	public $timestamps = false;

	protected $fillable = [
		'ktkunci',
		'respon',
		'aktif'
	];
}
