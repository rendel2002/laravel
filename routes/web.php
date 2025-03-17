<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/pdf/inventory-slip', [PDFController::class, 'generateInventoryPDF']);
Route::get('/pdf/journal-entry', [PDFController::class, 'generateJournalEntryPDF']);
