<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Template
 * 
 * @property int $id
 * @property string $template
 *
 * @package App\Models
 */
class Template extends Model
{
	protected $table = 'template';
	public $timestamps = false;

	protected $fillable = [
		'template'
	];
}
