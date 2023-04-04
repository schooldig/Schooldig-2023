<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblprefix
 * 
 * @property int $number
 * @property string $operator
 * @property string $prefix
 * @property string $keterangan
 *
 * @package App\Models
 */
class Tblprefix extends Model
{
	protected $table = 'tblprefix';
	protected $primaryKey = 'number';
	public $timestamps = false;

	protected $fillable = [
		'operator',
		'prefix',
		'keterangan'
	];
}
