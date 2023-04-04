<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblbidstudy
 * 
 * @property int $idbid
 * @property string|null $bidang
 *
 * @package App\Models
 */
class Tblbidstudy extends Model
{
	protected $table = 'tblbidstudy';
	protected $primaryKey = 'idbid';
	public $timestamps = false;

	protected $fillable = [
		'bidang'
	];
}
