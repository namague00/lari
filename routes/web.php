<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Runerpage;


Route::get('/test', \App\Livewire\Runerpage::class);
Route::get('/display', \App\Livewire\Displaypage::class);

use App\Http\Controllers\RunerBarcodeController;
Route::get('/runer/barcode/{id}', [RunerBarcodeController::class, 'show'])->name('runer.barcode');
