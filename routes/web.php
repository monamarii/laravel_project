<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/', function () {
    $ideas = Idea::query()
        ->when(request('status'), function ($query, $status) {
            $query->where('status', $status);
        })
        ->get();

    
        return view('ideas', [
        'greeting' => 'Hello',
        'person' => request('person', 'Person'),
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function () {
     Idea::create([
        'description' => request('idea'),
    ]);

    return redirect('/');
});

Route::get('/delete-ideas', function() {
    session()->forget('ideas'); 

    return redirect('/');
});