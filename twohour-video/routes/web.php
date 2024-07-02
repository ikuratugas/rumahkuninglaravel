<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [studentController::class, 'index']);
Route::get('/mahasiswa/{nim}', [studentController::class, 'getDetail']);
