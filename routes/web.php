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

//Route Pindah Laman
Route::get('/','ViewController@home');
Route::get('/vote', 'ViewController@vote')->middleware('auth');
Route::get('/login', 'ViewController@login')->middleware('guest')->name('login');
Route::get('/hitung', 'ViewController@hitung');
Route::get('/operator/operator/operator', 'ViewController@op');
Route::get('/register/registereuy', 'ViewController@register');
Route::get('/logout', 'ViewController@logout');

Route::get('/ajukan/{id}', 'ViewController@ajukan');
Route::get('/batalkan/{id}', 'ViewController@batalkan');

Route::post('/login/masuk', 'ViewController@masuk');
Route::post('/register/register', 'ViewController@reg');
Route::post('/vote/masuk', 'ViewController@hitungsuara')->middleware('auth');