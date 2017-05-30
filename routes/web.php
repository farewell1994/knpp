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


Route::get('/', function () {
    return view('welcome');
});*/

//для index (main action)  для інших статей (other action)
Route::get('/', function () { return redirect('/index/'); });
Route::get('/index', 'HomeController@main');

Route::get('/creating/', 'HomeController@other');
Route::get('/fizgeo/', 'HomeController@other');
Route::get('/biodiv/', 'HomeController@other');
Route::get('/hist-cult/', 'HomeController@other');
Route::get('/help/', 'HomeController@other');
Route::get('/sciense/', 'HomeController@other');
Route::get('/eco-edu/', 'HomeController@other');
Route::get('/nat-def/', 'HomeController@other');
Route::get('/recreation/', 'HomeController@other');
Route::get('/reproduction/', 'HomeController@other');
Route::get('/rules/', 'HomeController@other');
Route::get('/infrastr/', 'HomeController@other');

Route::get('/administration/', 'HomeController@administration');
Route::get('/matherials/', 'HomeController@materials');


Route::get('/routes/', 'HomeController@other');
Route::get('/eco-paths/', 'HomeController@other');
Route::get('/interesting/', 'HomeController@other');

Route::get('/contact/', 'ContactController@show');

Route::get('/gallery/', 'GalleryController@photo');
Route::get('/video/', 'GalleryController@video');
Route::get('/gallery/{url}/', ['as' => 'photoDif', 'uses' => 'GalleryController@photoDif']);

Route::get('/news/', 'NewsController@shownews');
Route::get('/news/{url}/', ['as' => 'pageNews', 'uses' => 'NewsController@pageNews']);

Route::get('/view/{url}/', ['as' => 'show', 'uses' => 'ViewController@show']);

