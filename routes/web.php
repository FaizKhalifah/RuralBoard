<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\wargaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[mainController::class,'index']);
Route::get('/warga',[wargaController::class,'index']);



