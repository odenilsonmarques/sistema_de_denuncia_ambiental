<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DenunciationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\FilterController;

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

Route::get('/typeDenunciation',[ChoiceController::class,'choice'])->name('typeDenunciation.choice');

Route::get('/denunciation',[DenunciationController::class,'add'])->name('denunciation.add');
Route::post('/denunciation/create',[DenunciationController::class,'create'])->name('denunciation.create');
Route::get('/denunciation/message',[MessageController::class,'msg'])->name('denunciation.msg');

//somente adm podem ver
Route::get('/denunciation/list',[DenunciationController::class,'list'])->name('denunciation.list');

Route::get('/denunciation/details/{id}',[DetailController::class,'details'])->name('denunciation.details');

Route::get('/denunciation/{id}/edit',[DenunciationController::class,'edit'])->name('denunciation.edit');
Route::put('/denunciation/{id}',[DenunciationController::class,'editAction'])->name('denunciation.editAction');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/denunciation/listPdf',[PdfController::class,'list'])->name('denunciation.listPdf');

Route::any('/search',[FilterController::class,'filter'])->name('search.filter');