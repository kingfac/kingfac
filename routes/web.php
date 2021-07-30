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

//Clients routes
Route::get('/', function () {
    return view('pages.client.home');
})->name('client');

//Admin routes
Route::get('/admin/{token}', function($token){
    if($token === '333') return view('pages.admin.login');
    else return view('404.errorToken');
})->name('admin');