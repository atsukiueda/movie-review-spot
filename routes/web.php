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
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => 'auth'], function (){
    Route::resource('users', 'UsersController', ['only' => ['show']]);
    Route::resource('reviews', 'ReviewsController', ['only' => ['store', 'destroy', 'index', 'create']]);
});

Route::get('movies', 'MoviesController@index')->name('movies.index');
Route::match(['GET', 'POST'], '/create', 'MoviesController@create')->name('movies.create');
Route::get('movies/{id}', 'MoviesController@show')->name('movies.show');

Route::group(['prefix' => 'movies/{id}'], function(){
        Route::post('favorite', 'FavoritesController@store')->name('favorites.favorite');
        Route::delete('unfavorite', 'FavoritesController@destroy')->name('favorites.unfavorite');
});

Route::get('fovorites', 'UsersController@favorites')->name('users.favorites');

