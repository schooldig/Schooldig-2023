<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbljurusan
 * 
 * @property int $idkom
 * @property int $idpro
 * @property string $kompetensi
 *
 * @package App\Models
 */
class Tbljurusan extends Model
{
	protected $table = 'tbljurusan';
	protected $primaryKey = 'idkom';
	public $timestamps = false;

	protected $casts = [
		'idpro' => 'int'
	];

	protected $fillable = [
		'idpro',
		'kompetensi'
	];
}
