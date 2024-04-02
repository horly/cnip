<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

/*

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/lang/{lang}',
    [LanguageController::class, 'switchLang'])
        ->name('app_language');

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('app_home');

    Route::prefix('sectors')->group(function(){
        Route::get('/agriculture', 'agriculture')->name('app_agriculture');
        Route::get('/transport', 'transport')->name('app_transport');
        Route::get('/immobilier', 'immobilier')->name('app_immobilier');
        Route::get('/tourisme', 'tourisme')->name('app_tourisme'); 
        Route::get('/general_trade', 'general_trade')->name('app_general_trade');
    });
});



