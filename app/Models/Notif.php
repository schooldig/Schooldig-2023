<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notif
 * 
 * @property string $notif
 *
 * @package App\Models
 */
class Notif extends Model
{
	protected $table = 'notif';
	protected $primaryKey = 'notif';
	public $incrementing = false;
	public $timestamps = false;
}
