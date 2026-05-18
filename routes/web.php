<?php

use Illuminate\Support\Facades\Route;

Route::View('/', 'welcome', [
    'greeting' => 'Hello',
    'person' => request('person', 'World'),
]);

// Route::view('/about', 'about');
Route::get('/about', function () {
    return view('about', [
        'tasks' => [],
    ]);
});

Route::view('/contact', 'contact');
