<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginPage()
    {
        return view('pages.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.dashboard.index', auth()->user()->id);
            } else if (auth()->user()->role == 'user') {
                return redirect()->route('user.dashboard.index', auth()->user()->id);
            } else {
                return redirect()->route('home');
            }
        }
        return back()->with('error', 'Invalid credentials');
    }

    public function registerPage()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password'])
        ]);

        Auth::login($user);
        return redirect()->route('user.dashboard.index', Auth::user()->id)->with('success', 'Register success');
    }

    public function resetPasswordPage()
    {
        return view('pages.auth.reset-password');
    }
}
