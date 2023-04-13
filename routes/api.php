<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Exceptions\JwtHandlerException;

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

// Middleware group for routes that require authentication
Route::middleware(['auth:api', 'auth.api'])->group(function () {
    /**
     * route "/user"
     * @method "GET"
     */
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Route /pegawai
    Route::apiResource('/pegawai', App\Http\Controllers\Api\PegawaiController::class);

    // Route /siswa
    Route::apiResource('/siswa', App\Http\Controllers\Api\SiswaController::class);

    // Route /kelas
    Route::apiResource('/kelas', App\Http\Controllers\Api\KelasController::class);

    // Route /pesdik
    Route::apiResource('/pesdik', App\Http\Controllers\Api\PesertaDidikController::class);

    // Route /absensi
    Route::apiResource('/absen', App\Http\Controllers\Api\AbsensiController::class);
});

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
 * route "/logout"
 * @method "POST"
 */
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
