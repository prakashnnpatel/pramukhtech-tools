<?php

use Illuminate\Support\Facades\Route;

#### For Frontside
use App\Http\Controllers\{
	HomeController,
};

Route::get('/{toolkey?}',[HomeController::class, 'index'])->name("toollist");
