<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


Route::get('/pdf', function () {
    return view('myPDF');
});
Route::get('qrcode', 'TestController@generateQrCode');
Route::get('testPostdata', 'TestController@testPostdata');


Route::get('/login','AccountController@login')->name('login');
Route::get('/', function () {
    return view('homepage');
});

Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('OrderRequest');
});
Route::get('/userlogin', function () {
    //return view('login');
    return view('/components/auth/users/login');
});

Route::get('/register', function () {
    //return view('register');
    return view('/components/auth/users/register');
});
Route::get('/admin', function () {
    return view('adminpage');
});

Route::get('/adminlogin', function () {
    //return view('adminlogin');
    return view('/components/auth/admin/login');
});

Route::get('/adminregister', function () {
    //return view('adminregister');
    return view('/components/auth/admin/register');
});

