<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DenunciationAnonymouController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\DenunciationIdentificationController;

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class,'home'])->name('homePage');

Route::get('/typeDenunciation',[ChoiceController::class,'choice'])->name('typeDenunciation.choice');

Route::get('/denunciation',[DenunciationAnonymouController::class,'add'])->name('denunciation.add');
Route::post('/denunciation/create',[DenunciationAnonymouController::class,'create'])->name('denunciation.create');


//route for display messsage with success
Route::get('/denunciation/message',[MessageController::class,'msg'])->name('denunciation.msg');

//somente adm podem ver
Route::get('/denunciation/list',[DenunciationAnonymouController::class,'list'])->name('denunciation.list');

Route::get('/denunciation/details/{id}',[DetailController::class,'details'])->name('denunciation.details');

Route::get('/denunciation/{id}/edit',[DenunciationAnonymouController::class,'edit'])->name('denunciation.edit');
Route::put('/denunciation/{id}',[DenunciationAnonymouController::class,'editAction'])->name('denunciation.editAction');
// Route::get('/', function () {
// return view('welcome');
// });

Route::get('/denunciation/listPdf',[PdfController::class,'list'])->name('denunciation.listPdf');

Route::any('/search',[FilterController::class,'filter'])->name('search.filter');


//routes for denunciation with identification
Route::get('/denunciation/identification',[DenunciationIdentificationController::class,'add'])->name('denunciation.identification.add');
Route::post('/denunciation/identification/create',[DenunciationIdentificationController::class,'create'])->name('denunciation.identification.create');

Route::get('/denunciation/identification/list',[DenunciationIdentificationController::class,'list'])->name('denunciation.identification.list');

Route::any('search/identification',[FilterController::class,'filterIdentification'])->name('search.identification');

Route::get('/denunciation/identification/details/{id}',[DetailController::class,'detailsIdentification'])->name('denunciation.detailsIdentification');

Route::get('/denunciation/identitification/{id}/edit',[DenunciationIdentificationController::class,'edit'])->name('identification.edit');
Route::put('/denunciation/identitification/{id}',[DenunciationIdentificationController::class,'editAction'])->name('identification.editAction');

Route::get('/denunciation/identitification/listPdf',[PdfController::class,'listPdfIdentification'])->name('identification.listPdfIdentification');

