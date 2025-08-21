<?php

use Illuminate\Support\Facades\Route;

#### For Frontside
use App\Http\Controllers\{
	HomeController,
	PDFController,
	QRCodeController,
};

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [HomeController::class, 'contactUsSubmit']);
Route::get('/sitemap.xml', [HomeController::class, 'sitemap']);
Route::post('/generate-invoice',[HomeController::class, 'generateInvoice'])->name("generate-invoice");
Route::post('/digital-document',[HomeController::class, 'digitalDocument'])->name("digital-document");
Route::post('/merge-images-to-pdf', [PDFController::class, 'mergeImagesToPdf'])->name('merge.images.pdf');
// QR Code generator API (keep before catch-all)
Route::match(['GET','POST'],'/qr-code-generator/generate', [QRCodeController::class, 'generate'])->name('qr.generate');
### Always keep This router at last
Route::get('/{toolkey?}/{subpart?}',[HomeController::class, 'tools'])->name("toollist");