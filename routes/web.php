<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
    
// });

//NOUVELLES ROUTES

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/abonnements', 'abonnements')->name('abonnements');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/connexion', 'connexion')->name('connexion');
});

#LOGIN