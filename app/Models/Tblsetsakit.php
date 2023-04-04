<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsetsakit
 * 
 * @property int|null $jumsakit1
 * @property int|null $plus1
 * @property string|null $tindakan1
 * @property string|null $sanksi1
 * @property int|null $jumsakit2
 * @property int|null $plus2
 * @property string|null $tindakan2
 * @property string|null $sanksi2
 * @property int|null $jumsakit3
 * @property int|null $plus3
 * @property string|null $tindakan3
 * @property string|null $sanksi3
 *
 * @package App\Models
 */
class Tblsetsakit extends Model
{
	protected $table = 'tblsetsakit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jumsakit1' => 'int',
		'plus1' => 'int',
		'jumsakit2' => 'int',
		'plus2' => 'int',
		'jumsakit3' => 'int',
		'plus3' => 'int'
	];

	protected $fillable = [
		'jumsakit1',
		'plus1',
		'tindakan1',
		'sanksi1',
		'jumsakit2',
		'plus2',
		'tindakan2',
		'sanksi2',
		'jumsakit3',
		'plus3',
		'tindakan3',
		'sanksi3'
	];
}
