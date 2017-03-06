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

Route::post('/insert','Controller@insert');
 /*{
    return View('auth/register');
});*/


Route::get('/about',function()
{
  return View::make('about');

});

Route::get('/contact',function()
{
  return View::make('contact');

});



Route::get('/idea',function()
{
  return View::make('choose_sim-idea');

});

Route::get('num','proviewcontroller@index');
Route::get('num1','proviewcontroller1@index');
Route::get('num2','proviewcontroller2@index');
Route::get('num3','proviewcontroller3@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/choose_sim','HomeController@choose');
Route::get('/form','customers_controller@form');
