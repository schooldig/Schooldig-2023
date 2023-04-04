<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsekolah
 * 
 * @property string $idsekolah
 * @property string $sekolah
 * @property string $alsekolah
 * @property string $telp
 * @property string $wasekolah
 * @property string $email
 * @property string $kab
 * @property string $disurat
 * @property string $alias
 * @property string $nama_ks
 * @property string $nip_ks
 * @property string $nama_waka
 * @property string $nip_waka
 * @property string $nama_ketua
 * @property string $nip_ketua
 * @property string $ang1
 * @property string $nip1
 * @property string $ang2
 * @property string $nip2
 * @property string $ang3
 * @property string $nip3
 * @property string $ang4
 * @property string $nip4
 * @property string $ang5
 * @property string $nip5
 * @property string $ang6
 * @property string $nip6
 * @property string $ang7
 * @property string $nip7
 * @property string $ang8
 * @property string $nip8
 * @property string $site_url
 * @property string $site_logo
 *
 * @package App\Models
 */
class Tblsekolah extends Model
{
	protected $table = 'tblsekolah';
	protected $primaryKey = 'idsekolah';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'sekolah',
		'alsekolah',
		'telp',
		'wasekolah',
		'email',
		'kab',
		'disurat',
		'alias',
		'nama_ks',
		'nip_ks',
		'nama_waka',
		'nip_waka',
		'nama_ketua',
		'nip_ketua',
		'ang1',
		'nip1',
		'ang2',
		'nip2',
		'ang3',
		'nip3',
		'ang4',
		'nip4',
		'ang5',
		'nip5',
		'ang6',
		'nip6',
		'ang7',
		'nip7',
		'ang8',
		'nip8',
		'site_url',
		'site_logo'
	];
}
