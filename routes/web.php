<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/toList', function(){
    return view('toList');
});
Route::get('/new', function(){
    return view('new');
});
Route::get('/dashboard', function(){
    return view('dashboard');
});
Route::get('/layouts/app', function(){
    return view('layouts.app');
});
