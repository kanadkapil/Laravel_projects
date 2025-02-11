<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/////////////////////////////////
use App\Http\Controllers\MultiplicationTableController;

// Display the calculate form
Route::get('/calculate', function () {
    return view('calculate');
})->name('calculate.show');

// Handle the calculate form submission
Route::post('/calculate', function () {
    return view('calculate');
})->name('calculate.submit');

// Display the multiplication table form
Route::get('/multiplication-table', [MultiplicationTableController::class, 'index'])->name('multiplication.index');

// Generate and display the multiplication table
Route::post('/multiplication-table', [MultiplicationTableController::class, 'generate'])->name('multiplication.generate');
///////////////////////////

