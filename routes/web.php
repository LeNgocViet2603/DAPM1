<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

// Route::get('/', 'App\Http\Controllers\adminController@showDashboard');
// Route::get('/admin', 'App\Http\Controllers\adminController@showDashboard');

// begin user routes
Route::prefix('')->group(function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'HomeController@index'
    ]);
    Route::get('/login', [
        'as' => 'login',
        'uses' => 'LoginController@index'
    ]);

    Route::post('/login', [
        'as' => 'login',
        'uses' => 'LoginController@authentication'
    ]);
    Route::get('/register', [
        'as' => 'register',
        'uses' => 'RegisterController@index'
    ]);

    Route::post('/register', [
        'as' => 'register',
        'uses' => 'RegisterController@register'
    ]);

    Route::get('/search', [
        'as' => 'register',
        'uses' => 'HomeController@handleSearch'
    ]);

    Route::get('/posts/{postId}', 'HomeController@postDetail');
});
// end user routes

// begin admin routes
Route::prefix('admin-page')->group(function () {
    Route::get('/', [
        'as' => 'admin.index',
        'uses' => 'adminController@index'
    ]);

    // Route::get('/dashboard', [
    //     'as' => 'admin.dashboard',
    //     'uses' => 'adminController@ShowDashboard'
    // ]);

    Route::get('/statistics', [
        'as' => 'statistics.statistics',
        'uses' => 'StatisticsController@Statistics'
    ]);
});
// end admin routes