<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsetijin
 * 
 * @property int|null $jumijin1
 * @property int|null $plus1
 * @property string|null $tindakan1
 * @property string|null $sanksi1
 * @property int|null $jumijin2
 * @property int|null $plus2
 * @property string|null $tindakan2
 * @property string|null $sanksi2
 * @property int|null $jumijin3
 * @property int|null $plus3
 * @property string|null $tindakan3
 * @property string|null $sanksi3
 *
 * @package App\Models
 */
class Tblsetijin extends Model
{
	protected $table = 'tblsetijin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jumijin1' => 'int',
		'plus1' => 'int',
		'jumijin2' => 'int',
		'plus2' => 'int',
		'jumijin3' => 'int',
		'plus3' => 'int'
	];

	protected $fillable = [
		'jumijin1',
		'plus1',
		'tindakan1',
		'sanksi1',
		'jumijin2',
		'plus2',
		'tindakan2',
		'sanksi2',
		'jumijin3',
		'plus3',
		'tindakan3',
		'sanksi3'
	];
}
