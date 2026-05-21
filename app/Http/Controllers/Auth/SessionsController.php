<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SessionsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'max:255', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/ideas');
        }

        return back()
            ->withErrors([
                'email' => 'The provided email or password is incorrect',
            ])
            ->onlyInput('email');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/ideas');
    }
}
