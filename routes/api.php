<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Authorization,Origin, Content-Type, X-Auth-Token, X-XSRF-TOKEN');


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
    'namespace'  => 'App\Http\Controllers',
], function () {
        //-----------------------API-JWT------------------------\\
        Route::post('login', 'ProductorController@login');
        Route::post('changePassword', 'ProductorController@cambiarContra');
        Route::get('logout', 'ProductorController@logout');
        Route::get('me', 'ProductorController@me');
        Route::get('productor', 'ProductorController@index');
        Route::get('productor/{id}', 'ProductorController@show');
        Route::post('productor', 'ProductorController@create');
        Route::put('productor/{id}', 'ProductorController@update');

        
        Route::get('periodo', 'PeriodoController@index');
        Route::get('periodo/{id}', 'PeriodoController@show');
        Route::post('periodo', 'PeriodoController@create');
        Route::put('periodo/{id}', 'PeriodoController@update');
        Route::delete('periodo/{id}', 'PeriodoController@update');

        
        Route::get('vacuno', 'VacunoController@index');
        Route::get('vacuno/{id}', 'VacunoController@show');
        Route::post('vacuno', 'VacunoController@create');
        Route::put('vacuno/{id}', 'VacunoController@update');
        Route::delete('vacuno/{id}', 'VacunoController@update');
        

        Route::get('almacenTipos', 'AlmacenTipoController@index');
        Route::get('almacenTipos/{id}', 'AlmacenTipoController@show');
        Route::post('almacenTipos', 'AlmacenTipoController@create');
        Route::put('almacenTipos/{id}', 'AlmacenTipoController@update');
        Route::delete('almacenTipos/{id}', 'AlmacenTipoController@update');
        

        Route::get('grupoSanguineo', 'GrupoSanquineoController@index');
        Route::get('grupoSanguineo/{id}', 'GrupoSanquineoController@show');
        Route::post('grupoSanguineo', 'GrupoSanquineoController@create');
        Route::put('grupoSanguineo/{id}', 'GrupoSanquineoController@update');
        Route::delete('grupoSanguineo/{id}', 'GrupoSanquineoController@update');
        

        Route::get('razaVacuno', 'RazaVacunoController@index');
        Route::get('razaVacuno/{id}', 'RazaVacunoController@show');
        Route::post('razaVacuno', 'RazaVacunoController@create');
        Route::put('razaVacuno/{id}', 'RazaVacunoController@update');
        Route::delete('razaVacuno/{id}', 'RazaVacunoController@update');
        

        Route::get('almacen', 'AlmacenController@index');
        Route::get('almacen/{id}', 'AlmacenController@show');
        Route::post('almacen', 'AlmacenController@create');
        Route::put('almacen/{id}', 'AlmacenController@update');
        Route::delete('almacen/{id}', 'AlmacenController@update');
});
    