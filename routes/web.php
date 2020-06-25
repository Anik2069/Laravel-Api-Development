<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//GEt -- user request to view a page
//post  -- User reqest server to save data.
//Put
//
Route::get('/form','routing@viewform');

Route::post('/submitform','LogininfoController@submitdata');

Route::get('/edit/{id}','LogininfoController@view_edit_form');

Route::post('/editdata','LogininfoController@submiteditdata');

Route::get('/delete/{id}','LogininfoController@deleteData');
