<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriksaController;

Route::get('/periksas', [PeriksaController::class, 'index']);

