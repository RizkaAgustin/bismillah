<?php

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

Route::get('/', 'PagesController@home');

//Website
Route::get('/website', 'WebsiteController@index');
Route::get('/website/create', 'WebsiteController@create');
Route::post('/website', 'WebsiteController@store');
Route::get('/website/destroy/{id}','WebsiteController@destroy');
