<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', 'PostsController@index');
Route::get('events', 'EventController@index'); 
Route::get('eventuser/{id}', 'EventController@show'); 
Route::get('comingevents', 'EventController@comingEvents'); 

Route::post('addevent', 'EventController@store'); 
Route::post('addeventparticipant', 'EventParticipantController@store'); 
Route::get('eventparticipant/{id}', 'EventParticipantController@show');
Route::get('eventparticipantuser/{id}', 'EventParticipantController@showevent');


Route::get('gyms', 'GymController@index');
Route::get('courses/{id}', 'CourseController@indexmobile');
Route::get('feedbacks', 'FeedbackController@index');
Route::get('feedbackGym/{id}', 'FeedbackController@show');
Route::post('addFeedback', 'FeedbackController@store');
Route::post('deleteFeedback/{id}', 'FeedbackController@destroy');
Route::get('favoritegym/{id}', 'FavoriteController@show');
Route::get('favorites/{id}', 'FavoriteController@index');
Route::post('addFavorite', 'FavoriteController@store');
Route::post('deleteFavorite/{id}', 'FavoriteController@destroy');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::put('update/{id}', 'UserController@updatemobile');
Route::get('search/{name}', 'SearchController@simple');
Route::get('searchAdv/{name}', 'SearchController@advanced');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserController@details');
    });