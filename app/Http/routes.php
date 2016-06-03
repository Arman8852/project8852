<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('forum','ForumController');
Route::resource('topic','TopicsController');
Route::get('{id}/topics','TopicsController@topics');
Route::get('gettopics','TopicsController@submittopics')->middleware('auth');
Route::get('user/userstory/{id}','TopicsController@showtopicsdetails');
Route::get('user/{id}','UserController@userprofile');
Route::get('edittopic/{id}','TopicsController@editmytopic');
Route::post('updatetopic/{id}','TopicsController@updatemytopic');
Route::post('gettopics','TopicsController@gettopics');
Route::get('image','TopicsController@getimage');
Route::post('upload/{id}','TopicsController@upload');
Route::get('showmystory','Auth\AuthController@getownstory');
   Route::get('about', 'ProjectController@about');
   Route::get('search', 'ProjectController@search');
   Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'ProjectController@autocomplete'));
 Route::get('email','ProjectController@email') ;
Route::post('selecteduser','ProjectController@fetchdata');
  // Route::get('privatetopic','TopicsController@showeditedtopics');
     //Route::get('{id}', 'ProjectController@home');

     
   Route::get('login/facebook', 'Auth\AuthController@redirectToFacebook');
  Route::get('login/facebook/callback', 'Auth\AuthController@getFacebookCallback'); 



Route::get('/', 'ProjectController@index');
Route::get('register', 'ProjectController@register');

Route::get('login', 'ProjectController@login');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', [ 'uses' => 'Auth\AuthController@getLogout', 'as' => 'logout' ]);

//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::get('logout', 'AuthController@logout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
