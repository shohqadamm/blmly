<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/mentors', 'MentorsController@index')->name('mentors');
Route::get('/mentors/{id}', 'MentorController@show')->name('mentor.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit-profile', 'UserController@editProfile')->name('edit-profile');
Route::post('/edit-profile', 'UserController@updateProfile')->name('profile.update');
Route::get('/referral', 'UserController@referral')->name('referral');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/mentor/{mentor}/apply', 'MentorController@apply')->name('mentor.apply');
Route::post('/applications', 'ApplicationController@store')->name('applications.store');

// Route::post('/apply-to-mentor/{mentor}', 'MentorController@apply')->name('apply-to-mentor');
