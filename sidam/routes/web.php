<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DenunciationController;

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
Route::get('/', [HomeController::class,'home'])->name('homePage');

Route::get('/typeDenunciation',[DenunciationController::class,'choice'])->name('typeDenunciation.choice');

Route::get('/denunciation/anonymous',[DenunciationController::class,'create'])->name('denunciatoin.anonymous');

// Route::get('/', function () {
//     return view('welcome');
// });
