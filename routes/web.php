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
    return view('index');
});

Route::get('/signup', 'SignUpController@get');
Route::post('/signup/submit', 'SignUpController@submit');

Route::get('/login', 'LoginController@get')->middleware('auth.passcode');
Route::post('/login/auth', 'LoginController@auth');

Route::get('/resource', function(){
    return view('resource');
})->middleware('auth.passcode');

Route::get('/forgot-password', 'ForgotPassword@get');
Route::post('/forgot-password/submit', 'ForgotPassword@submit');
