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

Route::get('/denunciation',[DenunciationController::class,'add'])->name('denunciation.add');
Route::post('/denunciation/create',[DenunciationController::class,'create'])->name('denunciation.create');
Route::get('/denunciation/message',[DenunciationController::class,'msg'])->name('denunciation.msg');

//somente adm podem ver
Route::get('/denunciation/list',[DenunciationController::class,'list'])->name('denunciation.list');

Route::get('denunciaation/details/{id}',[DenunciationController::class,'details'])->name('denunciation.details');

// Route::get('/', function () {
//     return view('welcome');
// });


