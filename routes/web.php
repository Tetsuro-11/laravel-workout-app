<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Memo;

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
Route::get('/search', 'MemosController@search')->name('search');

// Memos

Route::get('/', 'MemosController@index')->name('memos.index');

// Route::resource('memos', 'MemosController');
Route::get('/memos', 'MemosController@index')->name('memos.index');

Route::get('memos/index', 'MemosController@index')->name('memos.index');

Route::get('memos/create', 'MemosController@create')->name('memos.create');

Route::post('memos/store', 'MemosController@store')->name('memos.store');

Route::get('memos/edit', 'MemosController@edit')->name('memos.edit');

Route::post('memos/update', 'MemosController@update')->name('memos.update');

Route::get('memos/delete', 'MemosController@delete')->name('memos.delete');

Route::get('mypage/', 'MemosController@mypage')->name('memos.mypage');

Auth::routes();

//Home
// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');

// Users
Route::resource('users', 'UserController');
