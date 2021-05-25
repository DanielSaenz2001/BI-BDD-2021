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
});
    