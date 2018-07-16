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

//boards
Route::get('boards', function () {
    return response(Board::all(),200);
});
 
Route::get('boards/{board}', function ($boardId) {
    return response()->json(['boardId' => "{$boardId}"], 200);
});
  
 
Route::post('boards', function(Request $request) {
    $resp = Board::create($request->all());
    return Redirect::to('/boards');
});
 
Route::put('boards/{board}', function(Request $request, $linkId) {
    $board = Board::findOrFail($boardId);
    $board->update($request->all());
    return $board;
});
 
Route::delete('boards/{board}',function($boardId) {
    Board::find($boardId)->delete();

    return 204;
});

//links
Route::get('links', function () {
    return response(Link::all(),200);
});
 
Route::get('links/{link}', function ($linkId) {
    return response()->json(['linkId' => "{$linkId}"], 200);
});
  
 
Route::post('links', function(Request $request) {
    $resp = Link::create($request->all());
});
 
Route::put('links/{link}', function(Request $request, $linkId) {
    $link = Link::findOrFail($linkId);
    $link->update($request->all());
    return $link;
});
 
Route::delete('links/{link}',function($linkId) {
    Link::find($linkId)->delete();

    return 204;
});

    //Board Routes
// Route::get('boards', 'BoardsController@index');

// Route::get('boards/{board}', 'BoardsController@show');
    
// Route::post('Board','BoardsController@store');
    
// Route::put('board/{board}','BoardsController@update');
    
// Route::delete('board/{board}', 'BoardsController@delete');

    //Link Routes
// Route::get('links', 'LinksController@index');
 
// Route::get('links/{link}', 'LinksController@show');
 
// Route::post('Links','LinksController@store');
 
// Route::put('links/{link}','LinksController@update');
 
// Route::delete('links/{link}', 'LinksController@delete');

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