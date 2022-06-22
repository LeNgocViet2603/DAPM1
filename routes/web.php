<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\manageLicenseController;
use App\Http\Controllers\providerLicenseController;
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
    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'LoginController@signOut'
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
        'as' => 'search',
        'uses' => 'HomeController@handleSearch'
    ]);

    Route::get('/posts/{slug}', 'HomeController@postDetail');

    Route::post(
        '/ajax/getWard',
        'StatisticsController@getWard'
    );
});
// end user routes

// begin admin routes
Route::prefix('admin-page')->group(function () {
    Route::get('/', [
        'as' => 'admin.index',
        'uses' => 'adminController@index'
    ]);
    Route::get('/posts', [
        'as' => 'admin.posts',
        'uses' => 'adminController@posts'
    ]);
    Route::get('/posts/{id}', [
        'as' => 'admin.posts.id',
        'uses' => 'adminController@postDetail'
    ]);
    Route::get('/add-post', [
        'as' => 'admin.addPost',
        'uses' => 'adminController@addPost'
    ]);
    Route::post('/add-post', [
        'as' => 'admin.addPost',
        'uses' => 'adminController@handleAddPost'
    ]);
    Route::put('/posts/{id}', [
        'as' => 'admin.editPost',
        'uses' => 'adminController@editPost'
    ]);


    Route::get('/statistics', [
        'as' => 'statistics.statistics',
        'uses' => 'StatisticsController@index'
    ]);


    Route::get('/statistics/report', [
        'as' => 'statistics.download',
        'uses' => 'StatisticsController@downloadPDF'
    ]);

    // router cap giay phep
    Route::get('/provider-license', 'providerLicenseController@showPageProviderLicense')->name('cosokinhdoanh.store');;
    Route::get('/provider-license/{id}/edit', 'providerLicenseController@update')->name('cosokinhdoanh.update');
    Route::post('/provider-license', 'providerLicenseController@Store')->name('cosokinhdoanh.store');
    Route::put('/provider-license', 'providerLicenseController@UpdateStatus')->name('cosokinhdoanh.store');


    // router thu hoi giay phep
    Route::get('/manage-license', 'manageLicenseController@showPageManageLicense')->name('kehoachthanhtra.block');
    Route::get('/manage-license/{id}/edit/{makehoach}', 'manageLicenseController@update')->name('ketquathanhtra.update');
    Route::put('/manage-license', 'manageLicenseController@Store')->name('ketquathanhtra.store');
});
// end admin routes

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
