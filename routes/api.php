<?php

use Illuminate\Http\Request;

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
//list all the articles
Route::get('articles','ArticlesController@index');
//list a single article
Route::get('article/{id}','ArticlesController@show');
//create a new article
Route::post('article','ArticlesController@store');
//update an article
Route::put('article/{id}','ArticlesController@store');
//delete an article
Route::delete('article/{id}','ArticlesController@destroy');

Route::get('/posts','Api\PostsApiController@index');
Route::get('/post/{id}','Api\PostsApiController@show');
Route::post('/post','Api\PostsApiController@store');
Route::put('/post/{id}', 'Api\PostsApiController@store');
Route::delete('/post/{id}', "Api\PostsApiController@destroy");
