<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas', []);

    return view('ideas', [
        'greeting' => 'Hello',
        'person' => request('person', 'Person'),
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    $ideas = session()->get('ideas', []);
    $ideas[] = request('idea');
    session()->put('ideas', $ideas);

    return redirect('/');
});

