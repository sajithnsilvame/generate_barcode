<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarcodeController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/barcode', [BarcodeController::class, 'index']);