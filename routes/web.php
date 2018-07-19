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
    return view('welcome');
});

Auth::routes();

Route::get("/boards", function() {
    $boards = DB::table('boards')->get();
    return $boards;
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'BoardsController@index')->name('boards');
Route::get('/home/{board}', 'BoardsController@show');
