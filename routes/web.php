<?php

use App\Http\Controllers\BMICalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::post('/calculate', [BMICalculatorController::class, 'calculate'])->name('calculate');

