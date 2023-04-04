<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Outbox
 * 
 * @property int $ID
 * @property Carbon $InsertIntoDB
 * @property string $DestinationNumber
 * @property string $FromNumber
 * @property string $TextDecoded
 * @property string $SenderID
 * @property string $CreatorID
 *
 * @package App\Models
 */
class Outbox extends Model
{
	protected $table = 'outbox';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'InsertIntoDB' => 'date'
	];

	protected $fillable = [
		'InsertIntoDB',
		'DestinationNumber',
		'FromNumber',
		'TextDecoded',
		'SenderID',
		'CreatorID'
	];
}
