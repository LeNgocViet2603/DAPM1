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
});
// end user routes

// begin admin routes
Route::prefix('admin-page')->group(function () {
    Route::get('/', [
        'as' => 'admin.index',
        'uses' => 'adminController@index'
    ]);
    Route::get('/posts',[
        'as' => 'admin.posts',
        'uses' => 'adminController@posts'
    ]);
    Route::get('/add-post',[
        'as' => 'admin.addPost',
        'uses' => 'adminController@addPost'
    ]);

    // Route::get('/dashboard', [
    //     'as' => 'admin.dashboard',
    //     'uses' => 'adminController@ShowDashboard'
    // ]);

});
// end admin routes