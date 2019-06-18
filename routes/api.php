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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');


    Route::get('/film', 'FilmController@index');
    Route::post('/film', 'FilmController@store');
    Route::delete('/film/{id}', 'FilmController@delete');

    Route::post('/genre', 'GenreController@store');
    Route::delete('/genre/{id}', 'GenreController@delete');

    Route::get('/comment', 'CommentController@index');
    Route::post('/comment', 'CommentController@store');
    Route::delete('/comment/{id}', 'CommentController@delete');

});

Route::get('/genre', 'GenreController@index');
