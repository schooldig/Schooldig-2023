<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pbk
 * 
 * @property int $ID
 * @property int $GroupID
 * @property string $Name
 * @property string $Number
 * @property string $pilih
 * @property int $id_user
 * @property string $is_public
 *
 * @package App\Models
 */
class Pbk extends Model
{
	protected $table = 'pbk';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'GroupID' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'GroupID',
		'Name',
		'Number',
		'pilih',
		'id_user',
		'is_public'
	];
}
