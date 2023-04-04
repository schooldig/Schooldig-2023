<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpegawai
 * 
 * @property string $kdguru
 * @property string $nmpegawai
 * @property string $nip
 * @property string $alpegawai
 * @property string $telp
 * @property string $jabatan
 * @property string $deviceid
 * @property string $groupacc
 * @property string $accabsen
 * @property string $acckurikulum
 * @property string $viewsiswa
 * @property string $status
 *
 * @package App\Models
 */
class Tblpegawai extends Model
{
	protected $table = 'tblpegawai';
	protected $primaryKey = 'kdguru';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nmpegawai',
		'nip',
		'alpegawai',
		'telp',
		'jabatan',
		'deviceid',
		'groupacc',
		'accabsen',
		'acckurikulum',
		'viewsiswa',
		'status'
	];
}
