<?php

use Illuminate\Http\Request;
use App\Board;
use App\Link;
use App\Message;
use App\Tag;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


    //Board Routes
// Route::get('boards', 'BoardsController@index');

// Route::get('boards/{board}', 'BoardsController@show');
    
Route::post('boards','BoardsController@store');
    
// Route::put('board/{board}','BoardsController@update');
    
// Route::delete('board/{board}', 'BoardsController@delete');

    //Link Routes
Route::get('links', 'LinksController@index');
 
Route::get('links/{link}', 'LinksController@show');
 
Route::post('links','LinksController@store');
 
Route::put('links/{link}','LinksController@update');
 
Route::delete('links/{link}', 'LinksController@delete');

    //Tag Routes
Route::get('tags', 'TagsController@index');

Route::get('tags/{tag}', 'TagsController@show');
    
Route::post('tags','TagsController@store');
    
Route::put('tags/{tag}','TagsController@update');
    
Route::delete('tags/{tag}', 'TagsController@delete');

//
Route::get('messages', 'MessagesController@index');
 
Route::get('messages/{message}', 'MessagesController@show');
 
Route::post('messages','MessagesController@store');
 
Route::put('messages/{message}','MessagesController@update');
 
Route::delete('messages/{message}', 'MessagesController@delete');