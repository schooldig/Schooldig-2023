<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblsetabsen
 * 
 * @property string|null $konseling1
 * @property int|null $alpha1
 * @property int|null $ijin1
 * @property int|null $sakit1
 * @property string|null $konseling2
 * @property int|null $alpha2
 * @property int|null $ijin2
 * @property int|null $sakit2
 * @property string|null $po1
 * @property int|null $alphap1
 * @property int|null $ijinp1
 * @property int|null $sakitp1
 * @property string|null $po2
 * @property int|null $alphap2
 * @property int|null $ijinp2
 * @property int|null $sakitp2
 * @property string|null $hv1
 * @property int|null $alphav1
 * @property int|null $ijinv1
 * @property int|null $sakitv1
 * @property string|null $opsiv1
 * @property string|null $hv2
 * @property int|null $alphav2
 * @property int|null $ijinv2
 * @property int|null $sakitv2
 * @property string|null $opsiv2
 *
 * @package App\Models
 */
class Tblsetabsen extends Model
{
	protected $table = 'tblsetabsen';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'alpha1' => 'int',
		'ijin1' => 'int',
		'sakit1' => 'int',
		'alpha2' => 'int',
		'ijin2' => 'int',
		'sakit2' => 'int',
		'alphap1' => 'int',
		'ijinp1' => 'int',
		'sakitp1' => 'int',
		'alphap2' => 'int',
		'ijinp2' => 'int',
		'sakitp2' => 'int',
		'alphav1' => 'int',
		'ijinv1' => 'int',
		'sakitv1' => 'int',
		'alphav2' => 'int',
		'ijinv2' => 'int',
		'sakitv2' => 'int'
	];

	protected $fillable = [
		'konseling1',
		'alpha1',
		'ijin1',
		'sakit1',
		'konseling2',
		'alpha2',
		'ijin2',
		'sakit2',
		'po1',
		'alphap1',
		'ijinp1',
		'sakitp1',
		'po2',
		'alphap2',
		'ijinp2',
		'sakitp2',
		'hv1',
		'alphav1',
		'ijinv1',
		'sakitv1',
		'opsiv1',
		'hv2',
		'alphav2',
		'ijinv2',
		'sakitv2',
		'opsiv2'
	];
}
