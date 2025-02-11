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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/name/{n1}/{n2}', function ($n1, $n2) {
    return $n1 . " " . $n2;
});

Route::get('/named', function () {
    return "Khankir chele";
});

Route::get('/test', function () {
    return "Test page amar showa";
})->name("testpage");



// group route
// Portfolio-related routes
Route::get('/portfolio', function () {
    return view('portfolio');
})->name("portfolio");

Route::prefix('portfolio')->group(function () {
    Route::get('/company', function () {
        return view('company');
    });
});

Route::get('/org', function () {
    return view('org');
});




// post route 
Route::get('/form', function () {
    return view('form');
});

Route::post('/formsubmit', function (Request $request) {
    // return "form amar shawa";

    // validation
    $request->validate([
        'name' => 'required|min:4|max:30',
        'email' => 'required|min:4|max:30|email'
    ]);
    $name = $request->input("name");
    $email = $request->input("email");
    // return "Name: $name <br><br> Email: $email";
    return "Name: {$request->input('name')} <br><br> Email: {$request->input('email')}";
})->name("formsubmit");
