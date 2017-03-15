<?php

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
    return view('layout');
});
Route::get('/in', function () {
    return view('insertForm');
});
Route::get('/inp', function () {
    return view('insertprovider');
});

Route::post('/insert','Controller@insert');
Route::post('/insertpro','Controller@service');
Route::post('/numinsert','numcontroller@insert');
 /*{
    return View('auth/register');
});*/
Route::post('/details','customers_controller@insert');

Route::get('/about',function()
{
  return View::make('about');

});

Route::get('/admin','AdminController@admin');
Route::post('/admin','AdminController@search');


Route::get('/idea','HomeController@idea');
Route::get('/bsnl','HomeController@bsnl');
Route::get('/airtel','HomeController@airtel');
Route::get('/vodafone','HomeController@vodafone');




Route::get('num','proviewcontroller@index');
Route::get('num1','proviewcontroller1@index');
Route::get('num2','proviewcontroller2@index');
Route::get('num3','proviewcontroller3@index');

Route::get('anum','airtelviewcontroller@index');
Route::get('anum1','airtelviewcontroller1@index');
Route::get('anum2','airtelviewcontroller2@index');
Route::get('anum3','airtelviewcontroller3@index');

Route::get('bnum','bsnlviewcontroller@index');
Route::get('bnum1','bsnlviewcontroller1@index');
Route::get('bnum2','bsnlviewcontroller2@index');
Route::get('bnum3','bsnlviewcontroller3@index');

Route::get('vnum','vodafoneviewcontroller@index');
Route::get('vnum1','vodafoneviewcontroller1@index');
Route::get('vnum2','vodafoneviewcontroller2@index');
Route::get('vnum3','vodafoneviewcontroller3@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/choose_sim','HomeController@choose');
Route::get('/form','customers_controller@form');
Route::get('/update','numcontroller@update');
