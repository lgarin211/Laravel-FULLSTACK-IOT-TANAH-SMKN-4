<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampelIOTController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/getall', [SampelIOTController::class, 'getall'])->name('getall');
Route::get('/getupdate', [SampelIOTController::class, 'getupdate'])->name('getupdate');
Route::get('/getsave', [SampelIOTController::class, 'getsave'])->name('getsave');
Route::get('/getbtnstatus', [SampelIOTController::class, 'btnstatus'])->name('btnstatus');
Route::get('/getAIRROLE', [SampelIOTController::class, 'AIRROLE'])->name('AIRROLE');
