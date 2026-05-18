<?php

namespace App\Http\Controllers;

use App\Models\Frog;
use Illuminate\Http\Request;

class FrogController extends Controller
{
    public function index()
    {
        return view('frogs.index');
    }

    public function random()
    {
        $frog = Frog::inRandomOrder()->first();

        return view('frogs.show', compact('frog'));
    }
}