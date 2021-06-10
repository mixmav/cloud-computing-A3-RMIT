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

Route::get('/', 'HomeController@Home');
Route::get('/auth/login', 'AuthController@LoginPage')->name('login');
Route::get('/auth/register', 'AuthController@RegisterPage');
Route::get('/auth/logout', 'AuthController@Logout');

Route::post('/auth/login', 'AuthController@LoginUser');
Route::post('/auth/register', 'AuthController@RegisterUser');
