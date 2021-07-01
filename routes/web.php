<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampelIOTController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [SampelIOTController::class, 'csm1'])->name('index');
Route::get('/csm1', [SampelIOTController::class, 'csm1'])->name('csm1');

Route::get('/csm2', [SampelIOTController::class, 'csm2'])->name('csm2');

Route::get('/csm3', [SampelIOTController::class, 'csm3'])->name('csm3');
