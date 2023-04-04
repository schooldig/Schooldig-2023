<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbljurnalsiswa
 * 
 * @property int $idjurnalsis
 * @property int $idjurnal
 * @property string|null $siswa
 * @property string|null $ketsiswa
 *
 * @package App\Models
 */
class Tbljurnalsiswa extends Model
{
	protected $table = 'tbljurnalsiswa';
	protected $primaryKey = 'idjurnalsis';
	public $timestamps = false;

	protected $casts = [
		'idjurnal' => 'int'
	];

	protected $fillable = [
		'idjurnal',
		'siswa',
		'ketsiswa'
	];
}
