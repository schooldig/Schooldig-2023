<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbllevelwa
 * 
 * @property string|null $levelwa
 * @property int|null $siswa
 * @property int|null $ortu
 * @property int|null $walikelas
 * @property int|null $bk
 * @property int|null $groupkelas
 * @property int|null $sekolah
 * @property int|null $guru
 * @property string $senderid
 *
 * @package App\Models
 */
class Tbllevelwa extends Model
{
	protected $table = 'tbllevelwa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'siswa' => 'int',
		'ortu' => 'int',
		'walikelas' => 'int',
		'bk' => 'int',
		'groupkelas' => 'int',
		'sekolah' => 'int',
		'guru' => 'int'
	];

	protected $fillable = [
		'levelwa',
		'siswa',
		'ortu',
		'walikelas',
		'bk',
		'groupkelas',
		'sekolah',
		'guru',
		'senderid'
	];
}
