<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblkela
 * 
 * @property int $idkelas
 * @property string $nmkelas
 * @property string $kelas
 * @property string $idjurusan
 * @property string $idwali
 * @property string $idbk
 * @property string|null $color
 * @property string $shif
 * @property string $wagroup
 *
 * @package App\Models
 */
class Tblkela extends Model
{
	protected $table = 'tblkelas';
	protected $primaryKey = 'idkelas';
	public $timestamps = false;

	protected $fillable = [
		'nmkelas',
		'kelas',
		'idjurusan',
		'idwali',
		'idbk',
		'color',
		'shif',
		'wagroup'
	];
}
