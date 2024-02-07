<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact/submit', 'EmailController@submitForm')->name('contact.submit');

Route::get('/blogpage1', function () {
    return view('blogs.blogpage1');
});

Route::get('/blogpage2', function () {
    return view('blogs.blogpage2');
});

Route::get('/blogpage3', function () {
    return view('blogs.blogpage3');
});