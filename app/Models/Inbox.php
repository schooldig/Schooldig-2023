<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inbox
 * 
 * @property int $ID
 * @property Carbon $ReceivingDateTime
 * @property string $SenderNumber
 * @property string $ToNumber
 * @property string $TextDecoded
 * @property string $image
 * @property string $file
 * @property string $url
 * @property string $Processed
 *
 * @package App\Models
 */
class Inbox extends Model
{
	protected $table = 'inbox';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ReceivingDateTime' => 'date'
	];

	protected $fillable = [
		'ReceivingDateTime',
		'SenderNumber',
		'ToNumber',
		'TextDecoded',
		'image',
		'file',
		'url',
		'Processed'
	];
}
