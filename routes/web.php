<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('csm1');
});
Route::get('/csm2', function () {
    return view('csm2');
});
Route::get('/csm1', function () {
    return view('csm1');
});

Route::get('/csm3', function () {
    return view('csm3');
});
