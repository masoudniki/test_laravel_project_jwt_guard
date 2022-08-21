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

Route::get('/', function () {
    dump('oh yeah now you are logged in ' . 'dear '.\Illuminate\Support\Facades\Auth::user()->name);
    dump('your details are:');
    dump(\Illuminate\Support\Facades\Auth::user()->toArray());

})->middleware('auth:jwt');
