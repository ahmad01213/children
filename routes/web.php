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
    return view('welcome');
});
Route::post('/loginadmin', 'Auth\LoginController@loginadmin')->name('loginadmin');
Route::get('logoutUser', 'Auth\LoginController@getLogout')->name('logoutUser');
Route::get('front/home','AppController@home');
Route::post('admin/messages/store', 'AppController@storeMessage');
Route::post('admin/users/store', 'AppController@storeUser');
Route::prefix('admin')->middleware('admin')->group(function() {
    Route::get('users', 'AppController@users');
    Route::get('users/edite/{id}', 'AppController@editeuser');
    Route::get('messages', 'AppController@messages');
    Route::delete('messages/delete/{id}', 'AppController@deleteMessage');
    Route::delete('users/delete/{id}', 'AppController@deleteUser');
    Route::post('users/update/{id}', 'AppController@updateUser');
});
Auth::routes();
