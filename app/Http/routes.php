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
Route::get('/', 'ArticleController@main');
Route::get('/home', function () { return redirect('/'); });


Route::get('/article/{url}/', ['as' => 'other', 'uses' => 'ArticleController@other']);

Route::get('/administration/', 'BossController@administration');
Route::get('/matherials/', 'MathController@materials');

Route::get('/contact/', 'ContactController@show');

Route::get('/gallery/', 'GalleryController@photo');
Route::get('/video/', 'GalleryController@video');
Route::get('/gallery/{url}/', ['as' => 'photoDif', 'uses' => 'GalleryController@photoDif']);

Route::get('/news/', 'NewsController@shownews');
Route::get('/news/{url}/', ['as' => 'pageNews', 'uses' => 'NewsController@pageNews']);

Route::get('/view/{url}/', ['as' => 'show', 'uses' => 'ViewController@show']);

Route::get('/search/', ['as' => 'search', 'uses' => 'SearchController@search']);
