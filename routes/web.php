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
Route::get('/', 'IndexController@getData');
Route::get('/how-we-help-you', 'HowWeHelpYouController@getData');
Route::get('/the-way-we-work', 'TheWayWeWorkController@getData');
Route::get('/where-we-operate', 'WhereWeOperateController@getData');
Route::get('/news/{name?}', 'NewsController@getData');
Route::get('/category/{name?}', 'NewsController@getCategoryData');
Route::get('/search', 'NewsController@search');
Route::get('/thank-you', 'GetInTouchController@thankYou');
Route::get('/get-in-touch', 'GetInTouchController@getData');
Route::post('/get-in-touch/store', 'GetInTouchController@store');
Route::get('/terms-and-conditions', 'TermsController@getData');

Route::get('clspl2016login', [
  'as' => 'clspl2016login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
