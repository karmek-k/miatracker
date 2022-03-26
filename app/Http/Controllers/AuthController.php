<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function validateLogin(UserLoginRequest $req)
    {
        $creds = $req->validated();

        if (Auth::attempt($creds)) {
            $req->session()->regenerate();

            return redirect()->route('expenses.index');
        }

        return back()->withErrors('Nieprawidłowe dane logowania');
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect()->route('index');
    }
}
