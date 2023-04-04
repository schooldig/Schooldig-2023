<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblizin
 * 
 * @property int $idizin
 * @property string $noreg
 * @property Carbon $mulai
 * @property string $alasan
 * @property string $keterangan
 * @property int $statusizin
 * @property string $namaacc
 * @property string $bukti
 * @property string $ditolak
 *
 * @package App\Models
 */
class Tblizin extends Model
{
	protected $table = 'tblizin';
	protected $primaryKey = 'idizin';
	public $timestamps = false;

	protected $casts = [
		'mulai' => 'date',
		'statusizin' => 'int'
	];

	protected $fillable = [
		'noreg',
		'mulai',
		'alasan',
		'keterangan',
		'statusizin',
		'namaacc',
		'bukti',
		'ditolak'
	];
}
