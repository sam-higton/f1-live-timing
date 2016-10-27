<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Route::resource('season','SeasonController');
//Route::resource('race','RaceController');


Route::get('/', 'SeasonController@index')->name('season.index');
Route::get('/{season}/','SeasonController@show')->name('season.show');
Route::get('/{season}/{round}/','RaceController@show')->name('race.show');