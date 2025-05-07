<?php

use Illuminate\Support\Facades\Route;

// default 
Route::get('/', function () {
    return view('welcome');
});

// 1 product 
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);





// 2 student register 
use App\Http\Controllers\StudentController;

Route::get('/register', [StudentController::class, 'create']);
Route::post('/register', [StudentController::class, 'store']);


// 3 student list controller
use App\Http\Controllers\StudentListController;

Route::get('/studentlist', [StudentListController::class, 'index']);



// 4 theme + 7 days session 
use Illuminate\Http\Request;

// Show page with theme
Route::get('/theme', function (Request $request) {
    // Check session first, then cookie
    $theme = session('theme') ?? $request->cookie('theme', 'light'); // default to 'light'

    // Store theme in session for current visit
    session(['theme' => $theme]);

    return view('theme', ['theme' => $theme]);
});

// Set the theme preference
Route::post('/set-theme', function (Request $request) {
    $theme = $request->input('theme', 'light');

    // Save to session
    session(['theme' => $theme]);

    // Redirect back with cookie (valid for 7 days)
    return redirect('/')->withCookie(cookie('theme', $theme, 60 * 24 * 7)); // 7 days
});





// 5 restrict 18 
// use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
// changes in middeleware 
Route::get('/agerestriction', function (Request $request) {
    $age = session('age');

    return view('agerestriction', ['age' => $age]);
});

// This route stores the user's age in the session
Route::post('/set-age', function (Request $request) {
    $request->validate([
        'age' => 'required|integer|min:1|max:120'
    ]);

    session(['age' => $request->input('age')]);

    return redirect('/');
});


// 7 en to es 
// needs to update 
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Route;

Route::get('/localization', function () {
    return view('localization');
});

// Set the language
Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'es'])) {
        abort(400); // only allow 'en' or 'es'
    }

    Session::put('locale', $locale);
    return redirect('/');
});

// 10 book  crud 
use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);





// my form 
use App\Http\Controllers\UserController;

Route::post('adduser', [UserController::class, 'adduser']);

Route::get('/form', [UserController::class, 'showForm']);
Route::post('/adduser', [UserController::class, 'store']);
