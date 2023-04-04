<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblmesinabsen
 * 
 * @property string $idmesin
 * @property string|null $status
 *
 * @package App\Models
 */
class Tblmesinabsen extends Model
{
	protected $table = 'tblmesinabsen';
	protected $primaryKey = 'idmesin';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'status'
	];
}
