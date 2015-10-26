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

//when a user makes a GET requests then what controller to call and what method
//all controllers have to return some sort of response( usually a view)

Route::get('/', 'IndexController@index');

Route::get('/contact-us', 'PagesController@contactus');

Route::get('/testimonials', 'PagesController@testimonials');


