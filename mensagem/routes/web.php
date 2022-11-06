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

Route::get('/', 'Main@x')->name('index');
Route::post('/init', 'Main@init')->name('init');
Route::get('/confirm/{purl}', 'Main@confirm')->name('confirm');

Route::get('/read/{purl}','main@read')->name('main_read');

