<?php

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
    return view('login.index');
});
Route::get('/register', function () {
    return view('users.create');
});

Route::resource('user','UserController');
Route::get('/delUser/{id}','UserController@destroy');
Route::post('/login_proses', 'LoginController@index');


