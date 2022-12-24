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
use App\Http\Controllers\DashboardAdminController;

require __DIR__.'/auth.php';

//Route for page home
Route::get('/', [HomeController::class,'home'])->name('homePage');



    //Routes for user logged
    Route::get('/dashboard',[DashboardUserController::class,'dash'])->name('dashboard.dash')->middleware('auth');

    Route::get('/listDenunciationUser',[DashboardUserController::class,'list'])->name('listDenunciations.list')->middleware('auth');

    // Route::get('/listDenunciationUser/modal/{id}',[DashboardUserController::class,'displayModal'])->name('listDenunciations.modal.displayModal')->middleware('auth');

    // Route::get('/complaint/identification/modal/{id}',[DetailController::class,'displayModal'])->name('complaint.identification.modal');


    Route::any('search/user',[FilterController::class,'filterDenunciation'])->name('search.filterDenunciation')->middleware('auth');


    Route::get('/complaint/type',[ChoiceController::class,'choice'])->name('complaint.type.choice');
    Route::get('/complaint/message',[MessageController::class,'msg'])->name('complaint.message.msg');

    //Routes for complaints anonymous
    Route::get('/complaint/anonymou',[DenunciationAnonymouController::class,'add'])->name('complaint.anonymou.add');
    Route::post('/complaint/anonymou/create',[DenunciationAnonymouController::class,'create'])->name('complaint.anonymou.create');

    Route::get('/complaint/anonymou/list',[DenunciationAnonymouController::class,'list'])->name('complaint.anonymou.list');
    Route::get('/complaint/anonymou/details/{id}',[DetailController::class,'details'])->name('complaint.anonymou.details');

    Route::get('/complaint/anonymou/{id}/edit',[DenunciationAnonymouController::class,'edit'])->name('complaint.anonymou.edit');
    Route::put('/complaint/anonymou/{id}',[DenunciationAnonymouController::class,'editAction'])->name('complaint.anonymou.editAction');

    Route::any('/complaint/anonymou/search',[FilterController::class,'filter'])->name('complaint.anonymou.filter');
    Route::get('/complaint/anonymou/listPdf',[PdfController::class,'listPdfAnonynous'])->name('complaint.anonymou.listPdf');

    //Routes for complaint with identification
    Route::get('/complaint/identification',[DenunciationIdentificationController::class,'add'])->name('complaint.identification.add');
    Route::post('/complaint/identification/create',[DenunciationIdentificationController::class,'create'])->name('complaint.identification.create');

    Route::get('/complaint/identification/list',[DenunciationIdentificationController::class,'list'])->name('complaint.identification.list');
    Route::get('/complaint/identification/details/{id}',[DetailController::class,'detailsIdentification'])->name('complaint.identification.detailsIdentification');

    Route::get('/complaint/identitification/{id}/edit',[DenunciationIdentificationController::class,'edit'])->name('complaint.identification.edit');
    Route::put('/complaint/identitification/{id}',[DenunciationIdentificationController::class,'editAction'])->name('complaint.identification.editAction');

    Route::any('/complaint/identification/search',[FilterController::class,'filterIdentification'])->name('complaint.identification.filterIdentification');
    Route::get('/complaint/identitification/listPdf',[PdfController::class,'listPdfIdentifications'])->name('complaint.identitification.listPdfIdentifications');

    Route::get('/complaint/listPdf/{id}',[PdfController::class,'list'])->name('complait.listPdf');

// //route for acesss dashboard admin
// Route::middleware(['auth','admin'])->group(function(){
//     Route::get('/dashboard',[DashboardAdminController::class,'admin'])->name('admin.dashboard');
// });
