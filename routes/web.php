<?php

use Illuminate\Http\Request;
use App\Board;
use App\Link;
use App\Message;
use App\Tag;
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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('api/boards', function(){
    return ('hello');
});

//THIS IS THE INDEX PAGE OF THE SITE
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::resource('messages', 'MessagesController');


    //Board Routes
Route::get('boards', 'BoardsController@index');
Route::get('boards/{board}', 'BoardsController@show');
Route::post('boards','BoardsController@store');
Route::put(' boards/{boards}','BoardsController@update');
Route::delete('boards/{boards}', 'BoardsController@delete');

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

    Route::post('/sendMail', 'IndexController@sendMail');