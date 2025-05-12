<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::group([ 'as' => 'Front.' ] , function (){
    Route::get('/' , [\App\Http\Controllers\FrontController::class , 'index'])->name('index');
    Route::get('About' , [\App\Http\Controllers\FrontController::class , 'About'])->name('About');
    Route::get('Contact' , [\App\Http\Controllers\FrontController::class , 'Contact'])->name('Contact');


});
