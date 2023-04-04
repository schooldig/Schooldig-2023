<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbllokasi
 * 
 * @property int $idlokasi
 * @property string $lokasi
 * @property string $alamat
 * @property string $lat
 * @property string $lon
 * @property string $batas
 * @property string $mile
 * @property string $satuan
 * @property string $aktif
 *
 * @package App\Models
 */
class Tbllokasi extends Model
{
	protected $table = 'tbllokasi';
	protected $primaryKey = 'idlokasi';
	public $timestamps = false;

	protected $fillable = [
		'lokasi',
		'alamat',
		'lat',
		'lon',
		'batas',
		'mile',
		'satuan',
		'aktif'
	];
}
