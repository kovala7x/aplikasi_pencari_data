<?php

namespace App\Http\Controllers;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pegawai', [ApiController::class, 'getData']);
Route::get('/pegawai/{id}', [ApiController::class, 'getDataById']);
Route::get('/pegawai/search_nama/{keyword}', [ApiController::class, 'getSearchNama']);
Route::get('/pegawai/search_jabatan/{keyword}', [ApiController::class, 'getSearchJabatan']);