<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblagtatib
 * 
 * @property int $idagtatib
 * @property string $nmtatib
 * @property string $nip
 * @property string $jabatan
 *
 * @package App\Models
 */
class Tblagtatib extends Model
{
	protected $table = 'tblagtatib';
	protected $primaryKey = 'idagtatib';
	public $timestamps = false;

	protected $fillable = [
		'nmtatib',
		'nip',
		'jabatan'
	];
}
