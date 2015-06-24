<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'UserController@showWelcome');
Route::get('/register','UserController@showRegister');
Route::post('/register','UserController@register');
Route::get('/login','UserController@showLogin');
Route::post('/login','UserController@login');
Route::get('/logout','UserController@logout');
Route::get('/post/{id}/view','PostController@show');
Route::get('/post/create','PostController@showAddPost');
Route::get('/post','PostController@showPosts');
Route::post('/post','PostController@store');
Route::post('/comment/{id}/add','CommentController@store');
Route::get('/booking','BookingController@showBooking');
Route::get('/booking/create','BookingController@create');
Route::post('/booking','BookingController@store');
Route::get('/book/{id}','BookingController@showBookingForm');
Route::post('/book/{id}','BookingController@book');
Route::get('/categories','UserController@showCategories');
Route::get('/search/historical','UserController@historical');
Route::get('/search/tourists','UserController@tourist');
Route::get('/search/cafe','UserController@cafe');
Route::get('/search/resorts','UserController@resorts');
Route::get('/search/etc','UserController@etc');
Route::get('/search',"UserController@search");
Route::get('/contactus', 'UserController@contact');
