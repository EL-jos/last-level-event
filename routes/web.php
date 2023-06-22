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

Route::get('/', ['as' => 'home.page', 'uses' => 'App\\Http\\Controllers\\PageController@home']);
Route::get('/about', ['as' => 'about.page', 'uses' => 'App\\Http\\Controllers\\PageController@about']);
Route::get('/category', ['as' => 'category.page', 'uses' => 'App\\Http\\Controllers\\PageController@category']);
Route::get('/event', ['as' => 'article.page', 'uses' => 'App\\Http\\Controllers\\PageController@event']);
Route::get('/faq', ['as' => 'faq.page', 'uses' => 'App\\Http\\Controllers\\PageController@faq']);
Route::get('/confidentialite', ['as' => 'confidentialite.page', 'uses' => 'App\\Http\\Controllers\\PageController@confidentialite']);
Route::get('/register', ['as' => 'register.page', 'uses' => 'App\\Http\\Controllers\\PageController@register']);
Route::get('/login', ['as' => 'login.page', 'uses' => 'App\\Http\\Controllers\\PageController@login']);

/*Route::prefix('admin')->group(function(){
    Route::get('/', ['as' => 'admin.home', 'uses' => ''])
});*/
