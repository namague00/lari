<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Runerpage;


Route::get('/test', \App\Livewire\Runerpage::class);
Route::get('/display', \App\Livewire\Displaypage::class);