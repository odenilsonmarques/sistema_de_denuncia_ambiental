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
use App\Http\Controllers\DashboardUserController;

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class,'home'])->name('homePage');

Route::get('/dashboard',[DashboardUserController::class,'dash'])->name('dashboard.dash')->middleware('auth');

Route::get('/listDenunciationUser',[DashboardUserController::class,'list'])->name('listDenunciations.list')->middleware('auth');

Route::any('search/user',[FilterController::class,'filterDenunciation'])->name('search.filterDenunciation')->middleware('auth');





Route::get('/complaint/type',[ChoiceController::class,'choice'])->name('complaint.type.choice');
Route::get('/complaint/message',[MessageController::class,'msg'])->name('complaint.message.msg');

//ROTAs PARA REFERENTE A DENUNCIAS ANONIMAS
Route::get('/complaint/anonymou',[DenunciationAnonymouController::class,'add'])->name('complaint.anonymou.add');
Route::post('/complaint/anonymou/create',[DenunciationAnonymouController::class,'create'])->name('complaint.anonymou.create');

Route::get('/complaint/anonymou/list',[DenunciationAnonymouController::class,'list'])->name('complaint.anonymou.list');
Route::get('/complaint/anonymou/details/{id}',[DetailController::class,'details'])->name('complaint.anonymou.details');

Route::get('/complaint/anonymou/{id}/edit',[DenunciationAnonymouController::class,'edit'])->name('complaint.anonymou.edit');
Route::put('/complaint/anonymou/{id}',[DenunciationAnonymouController::class,'editAction'])->name('complaint.anonymou.editAction');

Route::any('complaint/anonymou/search',[FilterController::class,'filter'])->name('complaint.anonymou.filter');
Route::get('/complaint/anonymou/listPdf',[PdfController::class,'list'])->name('complaint.anonymou.listPdf');




//routes for denunciation with identification
Route::get('/denunciation/identification',[DenunciationIdentificationController::class,'add'])->name('denunciation.identification.add');
Route::post('/denunciation/identification/create',[DenunciationIdentificationController::class,'create'])->name('denunciation.identification.create');

Route::get('/denunciation/identification/list',[DenunciationIdentificationController::class,'list'])->name('denunciation.identification.list');

Route::any('search/identification',[FilterController::class,'filterIdentification'])->name('search.identification');

Route::get('/denunciation/identification/details/{id}',[DetailController::class,'detailsIdentification'])->name('denunciation.detailsIdentification');

Route::get('/denunciation/identitification/{id}/edit',[DenunciationIdentificationController::class,'edit'])->name('identification.edit');
Route::put('/denunciation/identitification/{id}',[DenunciationIdentificationController::class,'editAction'])->name('identification.editAction');

Route::get('/denunciation/identitification/listPdf',[PdfController::class,'listPdfIdentification'])->name('identification.listPdfIdentification');

