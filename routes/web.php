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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/abonnements', [PagesController::class, 'abonnements'])->name('abonnements');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/connexion', [PagesController::class, 'connexion'])->name('connexion');
#LOGIN

