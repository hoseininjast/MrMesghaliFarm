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
    Route::get('Collaboration' , [\App\Http\Controllers\FrontController::class , 'Collaboration'])->name('Collaboration');
    Route::get('Contact' , [\App\Http\Controllers\FrontController::class , 'Contact'])->name('Contact');

    Route::group( ['prefix' => 'Panel' , 'as' => 'Panel.' ] ,function (){
        Route::get('index' , [\App\Http\Controllers\PanelController::class , 'index'])->name('index');
        Route::get('Report' , [\App\Http\Controllers\PanelController::class , 'Report'])->name('Report');

    });


});


Route::group([ 'prefix' => 'Dashboard' ,'as' => 'Dashboard.' , 'middleware' => 'auth' ] , function (){
    Route::get('/' , [\App\Http\Controllers\DashboardController::class , 'index'])->name('index');


    Route::group( ['prefix' => 'Users' , 'as' => 'Users.' ] ,function (){
        Route::get('index' , [\App\Http\Controllers\UserController::class , 'index'])->name('index');
        Route::get('Add' , [\App\Http\Controllers\UserController::class , 'Add'])->name('Add');
        Route::post('Create' , [\App\Http\Controllers\UserController::class , 'Create'])->name('Create');
        Route::delete('Delete/{id}' , [\App\Http\Controllers\UserController::class , 'Delete'])->name('Delete');

    });



});
