<?php

use Illuminate\Http\Request;
use App\Link;
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

Route::get('links', function () {
    return response(Link::all(),200);
});
 
Route::get('links/{link}', function ($linkId) {
    return response()->json(['linkId' => "{$linkId}"], 200);
});
  
 
Route::post('links', function(Request $request) {
    $resp = Link::create($request->all());
});
 
// Route::put('links/{link}', function(Request, $request, $linkId) {
//     $link = Link::findOrFail($linkId);
//     $link->update($request->all());
//     return $link;
// });
 
Route::delete('links/{link}',function($linkId) {
    Link::find($linkId)->delete();

    return 204;
});

Route::get('links', 'LinksController@index');
 
Route::get('links/{link}', 'LinksController@show');
 
Route::post('Links','LinksController@store');
 
Route::put('links/{link}','LinksController@update');
 
Route::delete('links/{link}', 'LinksController@delete');