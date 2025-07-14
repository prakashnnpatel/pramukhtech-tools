<?php

use Illuminate\Support\Facades\Route;

#### For Frontside
use App\Http\Controllers\{
	HomeController,
};

Route::get('/sitemap.xml', [HomeController::class, 'sitemap']);
Route::get('/{toolkey?}/{subpart?}',[HomeController::class, 'index'])->name("toollist");
Route::post('/generate-invoice',[HomeController::class, 'generateInvoice'])->name("generate-invoice");
Route::post('/digital-document',[HomeController::class, 'digitalDocument'])->name("digital-document");