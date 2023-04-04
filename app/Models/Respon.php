<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Respon
 * 
 * @property string $respon
 *
 * @package App\Models
 */
class Respon extends Model
{
	protected $table = 'respon';
	protected $primaryKey = 'respon';
	public $incrementing = false;
	public $timestamps = false;
}
