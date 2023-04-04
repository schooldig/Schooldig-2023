<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sentitem
 * 
 * @property int $ID
 * @property Carbon $InsertIntoDB
 * @property string $DestinationNumber
 * @property string $FromNumber
 * @property string $TextDecoded
 * @property string $SenderID
 * @property string $Status
 * @property string $CreatorID
 *
 * @package App\Models
 */
class Sentitem extends Model
{
	protected $table = 'sentitems';
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
		'Status',
		'CreatorID'
	];
}
