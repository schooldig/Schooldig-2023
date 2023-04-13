<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * route "/register"
 * @method "POST"
 */
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

/**
 * route "/login"
 * @method "POST"
 */
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});

// Route /pegawai
Route::middleware(['auth:api', 'jwt.auth'])->apiResource('/pegawai', App\Http\Controllers\Api\PegawaiController::class);

// Route /siswa
Route::middleware(['auth:api', 'jwt.auth'])->apiResource('/siswa', App\Http\Controllers\Api\SiswaController::class);

// Route /kelas
Route::middleware(['auth:api', 'jwt.auth'])->apiResource('/kelas', App\Http\Controllers\Api\KelasController::class);

// Route /pesdik
Route::middleware(['auth:api', 'jwt.auth'])->apiResource('/pesdik', App\Http\Controllers\Api\PesertaDidikController::class);
/**
 * route "/logout"
 * @method "POST"
 */
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
