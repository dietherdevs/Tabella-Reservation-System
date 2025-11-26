<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TabellaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================
// 1. PUBLIC PAGES
// ==========================================

// Home Page
Route::get('/', function () {
    return view('index');
});

// Menu Page
Route::get('/menu', function () {
    return view('menu');
});

// About Us
Route::get('/about', function () {
    return view('about');
});

// Contact Us
Route::get('/contact', function () {
    return view('contact');
});


// ==========================================
// 2. RESERVATION FLOW (Step-by-Step)
// ==========================================

// Step 1: Guest Details
Route::get('/reservation', function () {
    return view('reservation');
});

// Step 2: Date & Time
// Note: The form in Step 1 submits here
Route::get('/datetime', function () {
    return view('datetime');
});

// Step 3: Payment Option
// Note: The form in Step 2 submits here
Route::get('/payment', function () {
    return view('payment');
});

// Step 4: Final Summary
// Note: The form in Step 3 submits here
Route::get('/summary', function () {
    return view('summary');
});

// Step 5: Success Page
// IMPORTANT: This is called by your script.js after clicking "Confirm"
Route::get('/account-success', function () {
    return view('account_success');
});


// ==========================================
// 3. AUTHENTICATION (Login & Signup)
// ==========================================

// Show Login Page
Route::get('/login', function () {
    return view('login');
});

// Handle Login Submission (POST)
Route::post('/login', function () {
    // In the future, your login logic goes here.
    // For now, let's redirect to home to simulate success.
    return redirect('/');
});

// Show Sign Up Page
Route::get('/signup', function () {
    return view('signup');
});

// Handle Sign Up Submission (POST)
Route::post('/signup', function () {
    // In the future, your database saving logic goes here.
    // For now, let's show the success page.
    return redirect('/account-success');
});
 // Import this at the top!

// ... (Keep your GET routes for views as they are) ...

// POST Routes (Form Submissions)
Route::post('/signup', [TabellaController::class, 'storeUser']);
Route::post('/login', [TabellaController::class, 'loginUser']);
Route::post('/confirm-reservation', [TabellaController::class, 'storeReservation']);