<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/log', function () {
    return view('viewlogin');
});
Route::get('/regist', function () {
    return view('viewregist');
});
Route::get('/dashboard', function () {
    return view('dash.index');
});
Route::get('/profile', function () {
    return view('dash.pages-profile');
});
Route::get('/table', function () {
    return view('dash.table-basic');
});
Route::get('/logn', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
