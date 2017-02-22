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



Route::get('/get_sim',function()
{
  return View::make('get_sim');

});

Route::get('view','proviewcontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/choose_sim','HomeController@choose');
