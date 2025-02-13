<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Console\View\Components\Alert;
// use Alert;

class AuthController extends Controller
{
    public function index()
    {
        $tittle = 'Login';
        $user = Auth::user();

        return view('Login.login', \compact('tittle', 'user'));
    }
    public function regist()
    {
        $tittle = 'Registrations';
        $user = Auth::user();

        return view('Login.regist', \compact('tittle', 'user'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        // \dd($request);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => 'profile_photos/defaultUser.jpg',
            'role' => 'user',
            'last_login' => \now(),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $user->sendEmailVerificationNotification();

        return redirect()->route('login')->with('Registrasi Sukses', 'Registration successful! Please verify your email.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->email_verified_at === null) {
                return redirect()->route('login')->with('loginGagal', "You haven't verified your email! Please check your email for verification.");
            }
            if (Auth::attempt($request->only('email', 'password'))) {
                if ($user->role == 'admin') {
                    $user->update(['last_login' => now()]);
                    return redirect()->route('login', compact('user'))->with('loginAdmin', 'Login successful! Welcome, Admin!');
                } else if ($user->role == 'user') {
                    $user->update(['last_login' => now()]);
                    return redirect()->route('login', compact('user'))->with('loginUser', 'Login successful! Welcome!');
                }
            } else {
                return redirect()->route('login')->with('loginGagal', 'Wrong Email or Password!');
            }
        } else {
            return redirect()->route('login')->with('loginGagal', 'Email not registered!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }

    public function resendVerificationEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification email has been resent.');
    }
    public function notVerif()
    {
        $tittle = 'Not Verifikasi';
        return \view('Login\email-verify', \compact('tittle'));
    }
}
