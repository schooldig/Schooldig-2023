<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsetalpha
 * 
 * @property int|null $jumalpa1
 * @property string|null $tindakan1
 * @property string|null $sanksi1
 * @property int|null $jumalpa2
 * @property string|null $tindakan2
 * @property string|null $sanksi2
 * @property int|null $jumalpa3
 * @property string|null $tindakan3
 * @property string|null $sanksi3
 * @property int|null $jumalpa4
 * @property string|null $tindakan4
 * @property string|null $sanksi4
 * @property int|null $jumalpa5
 * @property string|null $tindakan5
 * @property string|null $sanksi5
 * @property int|null $jumalpa6
 * @property string|null $tindakan6
 * @property string|null $sanksi6
 *
 * @package App\Models
 */
class Tblsetalpha extends Model
{
	protected $table = 'tblsetalpha';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jumalpa1' => 'int',
		'jumalpa2' => 'int',
		'jumalpa3' => 'int',
		'jumalpa4' => 'int',
		'jumalpa5' => 'int',
		'jumalpa6' => 'int'
	];

	protected $fillable = [
		'jumalpa1',
		'tindakan1',
		'sanksi1',
		'jumalpa2',
		'tindakan2',
		'sanksi2',
		'jumalpa3',
		'tindakan3',
		'sanksi3',
		'jumalpa4',
		'tindakan4',
		'sanksi4',
		'jumalpa5',
		'tindakan5',
		'sanksi5',
		'jumalpa6',
		'tindakan6',
		'sanksi6'
	];
}
