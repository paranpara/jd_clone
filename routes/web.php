<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminLogin;

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

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/directory', function () {
    return view('home.directory');
});

Route::get('/login', function () {
    return view('auth.login');
});

// Admin Routes
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
	Route::get('/login', 'AdminController@showAdminLoginForm');
	Route::get('/home', 'AdminHomeController@index');
	
	Route::post('/home','AdminHomeController@login');

});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
Route::get('/logout', 'Auth\LoginController@logout');
