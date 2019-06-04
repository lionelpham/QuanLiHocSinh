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

//Auth
Route::post('/user-register', 'UserController@register');
Route::post('/user-login', 'UserController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'UserController@login');

//Homepage
Route::get('/homepage', 'HomepageController@index');
//Update profile, account
Route::get('/update-profile','HomepageController@profile');
Route::get('/update-account','HomepageController@account');
// role
Route::get('/set-role','RolesController@setRole');

Route::get('/create-role','RolesController@createRole');
Route::get('/list-role','RolesController@listRole');
