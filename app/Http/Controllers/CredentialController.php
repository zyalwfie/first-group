<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CredentialController extends Controller
{
    public function signin()
    {
        return view('signin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('welcome')->with('login', 'Login successfully.');
        }

        return back()->with('login_failed', 'The provided credentials do not match our records.');
    }

    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'username' => 'required|unique:users|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:16',
            'confirm_password' => 'required|same:password',
        ]);

        $validatedData['full_name'] = $validatedData['first_name'] . ' ' . $validatedData['last_name'];
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('signin')->with('success', 'Your account has been registered.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('welcome')->with('logout', 'You\'ve been logged out.');
    }
}
