<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblbataspoin
 * 
 * @property string $tindakan1
 * @property int $poin1
 * @property string $sanksi1
 * @property string $tindakan2
 * @property int $poin2
 * @property string $sanksi2
 * @property string $tindakan3
 * @property int $poin3
 * @property string $sanksi3
 * @property string $tindakan4
 * @property int $poin4
 * @property string $sanksi4
 * @property string $tindakan5
 * @property int $poin5
 * @property string $sanksi5
 *
 * @package App\Models
 */
class Tblbataspoin extends Model
{
	protected $table = 'tblbataspoin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'poin1' => 'int',
		'poin2' => 'int',
		'poin3' => 'int',
		'poin4' => 'int',
		'poin5' => 'int'
	];

	protected $fillable = [
		'tindakan1',
		'poin1',
		'sanksi1',
		'tindakan2',
		'poin2',
		'sanksi2',
		'tindakan3',
		'poin3',
		'sanksi3',
		'tindakan4',
		'poin4',
		'sanksi4',
		'tindakan5',
		'poin5',
		'sanksi5'
	];
}
