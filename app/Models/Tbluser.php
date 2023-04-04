<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbluser
 * 
 * @property string $username
 * @property string $pass
 * @property string $nama
 * @property int $ids
 * @property int $c1
 * @property int $c2
 * @property int $c3
 * @property int $c4
 * @property int $c5
 * @property int $c6
 * @property int $c7
 * @property int $c8
 * @property int $c9
 * @property int $c10
 * @property int $c11
 * @property int $c12
 * @property int $c13
 * @property int $c14
 * @property int $c15
 * @property int $c16
 * @property int $c17
 * @property int $c18
 * @property int $c19
 * @property int $c20
 * @property int $c21
 * @property int $c22
 * @property int $c23
 * @property int $c24
 * @property int $c25
 * @property int $c26
 * @property int $c27
 * @property int $c28
 * @property int $c29
 * @property int $c30
 * @property int $c31
 * @property int $c32
 * @property int $c33
 * @property int $c34
 * @property int $c35
 * @property int $c36
 * @property int $c37
 * @property int $c38
 * @property int $c39
 * @property int $c40
 * @property int $c41
 * @property int $c42
 * @property int $c43
 * @property int $c44
 * @property int $G1
 * @property int $G2
 * @property int $G3
 * @property int $G4
 * @property int $G5
 * @property int $G6
 * @property int $G7
 *
 * @package App\Models
 */
class Tbluser extends Model
{
	protected $table = 'tbluser';
	protected $primaryKey = 'username';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ids' => 'int',
		'c1' => 'int',
		'c2' => 'int',
		'c3' => 'int',
		'c4' => 'int',
		'c5' => 'int',
		'c6' => 'int',
		'c7' => 'int',
		'c8' => 'int',
		'c9' => 'int',
		'c10' => 'int',
		'c11' => 'int',
		'c12' => 'int',
		'c13' => 'int',
		'c14' => 'int',
		'c15' => 'int',
		'c16' => 'int',
		'c17' => 'int',
		'c18' => 'int',
		'c19' => 'int',
		'c20' => 'int',
		'c21' => 'int',
		'c22' => 'int',
		'c23' => 'int',
		'c24' => 'int',
		'c25' => 'int',
		'c26' => 'int',
		'c27' => 'int',
		'c28' => 'int',
		'c29' => 'int',
		'c30' => 'int',
		'c31' => 'int',
		'c32' => 'int',
		'c33' => 'int',
		'c34' => 'int',
		'c35' => 'int',
		'c36' => 'int',
		'c37' => 'int',
		'c38' => 'int',
		'c39' => 'int',
		'c40' => 'int',
		'c41' => 'int',
		'c42' => 'int',
		'c43' => 'int',
		'c44' => 'int',
		'G1' => 'int',
		'G2' => 'int',
		'G3' => 'int',
		'G4' => 'int',
		'G5' => 'int',
		'G6' => 'int',
		'G7' => 'int'
	];

	protected $fillable = [
		'pass',
		'nama',
		'ids',
		'c1',
		'c2',
		'c3',
		'c4',
		'c5',
		'c6',
		'c7',
		'c8',
		'c9',
		'c10',
		'c11',
		'c12',
		'c13',
		'c14',
		'c15',
		'c16',
		'c17',
		'c18',
		'c19',
		'c20',
		'c21',
		'c22',
		'c23',
		'c24',
		'c25',
		'c26',
		'c27',
		'c28',
		'c29',
		'c30',
		'c31',
		'c32',
		'c33',
		'c34',
		'c35',
		'c36',
		'c37',
		'c38',
		'c39',
		'c40',
		'c41',
		'c42',
		'c43',
		'c44',
		'G1',
		'G2',
		'G3',
		'G4',
		'G5',
		'G6',
		'G7'
	];
}
