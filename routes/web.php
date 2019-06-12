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
Route::get('/quran/read', 'QuranController@read');
Route::get('/quran/tajwid', 'QuranController@tajwid');
Route::get('/quran', 'QuranController@index');

Route::get('/cv', 'CVController@index');

Route::get('/', 'IndexController@index');
Route::get(
    '/post/{year}/{month}/{day}/{slug}'
    , 'IndexController@post'
);
Route::get('/game/{slug}/{version?}', 'GameController@index');

Route::get(
    '/song/{slug}'
    , 'SongController@index'
);
Route::get(
    '/research/{slug}'
    , 'ResearchController@index'
);
Route::get(
    '/r/{slug}'
    , 'RController@index'
);
