<?php

namespace App\Common;

class Helpers
{
    public static function getRandom($modelClass)
    {
        return $modelClass::inRandomOrder()->first();
    }
}

/* -- kasutamine --

use App\Models\Frog;
use App\Common\Helpers;

Route::get('/frogs/random', function () {
    $frog = Helpers::getRandom(Frog::class);

    return view('frogs.show', compact('frog'));
});

*/