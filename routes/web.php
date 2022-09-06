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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Back-end route
Route::middleware('auth')
       ->prefix('admin')
       ->name('admin.')
       ->namespace('Admin')
       ->group( function(){
    Route::get('/', 'HomeController@index')->name('home');

});

// Front-end route
Route::get('{any?}',function(){
    return view('guest.home');
} )->where('any', ".*");
