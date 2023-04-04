<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusinessCard
 * 
 * @property int $id
 * @property string $name
 * @property string $photo
 * @property string $active
 *
 * @package App\Models
 */
class BusinessCard extends Model
{
	protected $table = 'business_card';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'photo',
		'active'
	];
}
