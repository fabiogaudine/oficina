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
});


    Route::get('/servico', 'ServicoController@index');
    Route::post('/servico', 'ServicoController@store');
    Route::delete('/servico/{id}', 'ServicoController@delete');

    Route::get('/peca', 'PecaController@index');
    Route::post('/peca', 'PecaController@store');
    Route::delete('/peca/{id}', 'PecaController@delete');

    Route::get('/proprietario', 'ProprietarioController@index');
    Route::post('/proprietario', 'ProprietarioController@store');
    Route::delete('/proprietario/{id}', 'ProprietarioController@delete');

    Route::get('/mecanico', 'MecanicoController@index');
    Route::post('/mecanico', 'MecanicoController@store');
    Route::delete('/mecanico/{id}', 'MecanicoController@delete');

    Route::get('/veiculo', 'VeiculoController@index');
    Route::post('/veiculo', 'VeiculoController@store');
    Route::delete('/veiculo/{id}', 'VeiculoController@delete');
