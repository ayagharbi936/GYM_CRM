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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});*/
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts','PostsController');
Route::resource('gyms','GymController');
Route::get('/gyms', 'GymController@indexweb');
Route::get('/searchUser', 'UserController@search');
Route::get('/searchSub', 'subscriptionController@search');

Route::get('/managers', 'UserController@managers');

Route::get('/allGyms','PagesController@allgyms');

Route::resource('users','UserController');
Route::resource('courses','CourseController');
Route::resource('subscription','subscriptionController');

Route::get('/dashboard', 'PagesController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
