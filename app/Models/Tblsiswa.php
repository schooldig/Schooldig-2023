<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsiswa
 * 
 * @property string $noreg
 * @property string $nis
 * @property string $nama
 * @property string $alamat
 * @property string $hpsiswa
 * @property string $hportu
 * @property string $gender
 * @property string $kelas
 * @property string $nmkelas
 * @property int $semester
 * @property string $thnpelajaran
 * @property string $statusx
 * @property string $protek
 * @property string $opsi
 * @property string $cek
 * @property string $deviceid
 * @property string $password
 * @property string $created_login
 * @property string $created_cookies
 * @property string $photo
 * @property int $idlokasi
 * @property int $pengurus
 *
 * @package App\Models
 */
class Tblsiswa extends Model
{
	protected $table = 'tblsiswa';
	protected $primaryKey = 'noreg';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'semester' => 'int',
		'idlokasi' => 'int',
		'pengurus' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nis',
		'nama',
		'alamat',
		'hpsiswa',
		'hportu',
		'gender',
		'kelas',
		'nmkelas',
		'semester',
		'thnpelajaran',
		'statusx',
		'protek',
		'opsi',
		'cek',
		'deviceid',
		'password',
		'created_login',
		'created_cookies',
		'photo',
		'idlokasi',
		'pengurus'
	];
}
