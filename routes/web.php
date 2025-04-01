<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrController;

// Define all valid routes
Route::get('/', function () {
    return view('index');
});

Route::get('/About-Pradip-Sir/Journey-To-God', function () {
    return view('journey_to_god');
});

Route::get('/About-Pradip-Sir/Journey-With-God', function () {
    return view('journey_with_god');
});

Route::get('/Gods-Mantra', function () {
    return view('gods_mantra');
});

Route::get('/Gods-Book/About', function () {
    return view('gods_book_about');
});

Route::get('/Gods-Book/Order', function () {
    return view('book_order');
});

Route::get('/Gods-Book/Read', function () {
    return view('book_read');
});

Route::get('/Gods-Healing-Photo', function () {
    return view('gods_healing_photo');
});

Route::get('/Resources/Video-Message-English', function () {
    return view('video_message_english');
});

Route::get('/Resources/Video-Message-Hindi', function () {
    return view('video_message_hindi');
});

Route::get('/Others/Contact', function () {
    return view('contact');
});

Route::get('/Others/FAQ', function () {
    return view('faq');
});

// Catch-all route for 404 pages (should be placed last)
Route::fallback([ErrController::class, 'notFound']);

Route::get('/admin', function () {
    return view('admin.index');
});
