<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblizinpulang
 * 
 * @property int $idizinpulang
 * @property string $noreg
 * @property Carbon $tglizin
 * @property Carbon $jampulang
 * @property string $alasan
 * @property int $statusizin
 * @property string $namaacc
 * @property string $ditolak
 *
 * @package App\Models
 */
class Tblizinpulang extends Model
{
	protected $table = 'tblizinpulang';
	protected $primaryKey = 'idizinpulang';
	public $timestamps = false;

	protected $casts = [
		'tglizin' => 'date',
		'jampulang' => 'date',
		'statusizin' => 'int'
	];

	protected $fillable = [
		'noreg',
		'tglizin',
		'jampulang',
		'alasan',
		'statusizin',
		'namaacc',
		'ditolak'
	];
}
