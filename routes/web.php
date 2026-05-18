<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::View('/', 'welcome', [
    'greeting' => 'Hello',
    'person' => request('person', 'World'),
]);
