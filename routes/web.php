<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mainController;
use App\Http\Controllers\TaxiDriverController;
use App\Http\Controllers\TheuncannycounterController;
use App\Http\Controllers\TheveilController;

Route::get('/', [mainController::class, 'index']);
Route::get('/TaxiDriver', [TaxiDriverController::class, 'index']);
Route::get('/Theuncannycounter', [TheuncannycounterController::class, 'index']);
Route::get('/Theveil', [TheveilController::class, 'index']);