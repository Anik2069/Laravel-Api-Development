<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get("getcountry",'StudentController@getcountry');
Route::get("viewcountry/{id}",'StudentController@getcountry_view');
Route::post('save_country','StudentController@getcountry_save');
Route::post('edit_country/{id}','StudentController@edit_country');
