<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        'data' => [
        [
            'title' => 'Home Page (loaded from web.php)',
            'content' => 'Welcome to the home page!',
        ],
        [
            'title' => 'Another Section',
            'content' => 'This is another section of the home page.',
        ],
        [
            'title' => 'Another Section',
            'content' => 'This is another section of the home page.',
        ]
        ]
    ]);
})->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/about', function () {
    return view('about');
})->name('about');