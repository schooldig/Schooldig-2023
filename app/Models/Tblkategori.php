<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblkategori
 * 
 * @property string $idgroup
 * @property string $idkategori
 * @property string $kategori
 *
 * @package App\Models
 */
class Tblkategori extends Model
{
	protected $table = 'tblkategori';
	protected $primaryKey = 'idkategori';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'idgroup',
		'kategori'
	];
}
