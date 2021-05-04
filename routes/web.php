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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => 'homepage', 'uses' => 'App\Http\Controllers\PageController@homepage'])->name('homepage');
Route::get('/services', ['as' => 'services', 'uses' => 'App\Http\Controllers\PageController@services'])->name('services');
Route::get('/aboutus', ['as' => 'aboutus', 'uses' => 'App\Http\Controllers\PageController@aboutus'])->name('aboutus');
Route::get('/support', ['as' => 'support', 'uses' => 'App\Http\Controllers\PageController@support'])->name('support');
Route::get('/partners', ['as' => 'partners', 'uses' => 'App\Http\Controllers\PageController@partners'])->name('partners');
Route::get('/contact', ['as' => 'contact', 'uses' => 'App\Http\Controllers\PageController@contact'])->name('contact');
