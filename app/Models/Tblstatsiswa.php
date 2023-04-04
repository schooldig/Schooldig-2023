<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblstatsiswa
 * 
 * @property int $idstat
 * @property string $statusx
 *
 * @package App\Models
 */
class Tblstatsiswa extends Model
{
	protected $table = 'tblstatsiswa';
	protected $primaryKey = 'idstat';
	public $timestamps = false;

	protected $fillable = [
		'statusx'
	];
}
