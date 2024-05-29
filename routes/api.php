<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PresensiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:web')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to the API',
        'status' => 'Connected'
    ], 200);
});

Route::group(['middleware' => ['cekUserLevel:mahasiswa']], function () {

});

Route::group(['middleware' => ['cekUserLevel:dosen']], function () {

});

Route::get('/jadwal_now', [PresensiController::class, 'getCurrentSchedule']);


