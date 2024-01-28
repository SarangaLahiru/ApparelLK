<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\customercontroller;
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
    return view('/Auth/home1');
});
Route::get('/register', function () {
    return view('/Auth/register');
});
Route::get('/login', function () {
    return view('/Auth/login');
});
Route::get('/dashboard', function () {
    return view('/Auth/dash');
});
Route::get('/customize', function () {
    return view('/Auth/custom');
});
Route::get('/contact', function () {
    return view('/Auth/contact');
});
Route::post('reg',[customercontroller::class,'register'])->name('reg');
Route::post('log',[customercontroller::class,'login'])->name('log');
Route::post('item',[customercontroller::class,'itemadd'])->name('item');
Route::post('actcontact',[customercontroller::class,'actcontact'])->name('actcontact');