<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\manageLicenseController;
use App\Http\Controllers\providerLicenseController;
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

Route::get('/', 'App\Http\Controllers\adminController@showDashboard');
Route::get('/admin', 'App\Http\Controllers\adminController@showDashboard');
Route::get('/manage-license', 'App\Http\Controllers\manageLicenseController@showPageManageLicense');
Route::get('/provider-license', 'App\Http\Controllers\providerLicenseController@showPageProviderLicense');