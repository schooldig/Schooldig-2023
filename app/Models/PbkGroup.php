<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PbkGroup
 * 
 * @property string $Name
 * @property int $ID
 * @property int $id_user
 * @property string $is_public
 *
 * @package App\Models
 */
class PbkGroup extends Model
{
	protected $table = 'pbk_groups';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int'
	];

	protected $fillable = [
		'Name',
		'id_user',
		'is_public'
	];
}
