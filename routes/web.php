<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TabellaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/datetime', function () {
    return view('datetime');
});


Route::get('/payment', function () {
    return view('payment');
});


Route::get('/summary', function () {
    return view('summary');
});

Route::get('/account-success', function () {
    return view('account_success');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {

    return redirect('/');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', function () {

    return redirect('/account-success');
});

Route::post('/signup', [TabellaController::class, 'storeUser']);
Route::post('/login', [TabellaController::class, 'loginUser']);
Route::post('/confirm-reservation', [TabellaController::class, 'storeReservation']);