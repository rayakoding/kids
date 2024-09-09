<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'KIDS (Kassih Ibu Digital Sehat)'
        ];

        return view('auth.index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Masuk | KIDS (Kassih Ibu Digital Sehat)'
        ];

        return view('auth.login', $data);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::check() && Auth::user()->role_id == 'Admin') {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('dashboard');
            }
        }

        Session::flash('merah', 'Data Login Salah!');

        return redirect('/login');
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar | KIDS (Kassih Ibu Digital Sehat)'
        ];

        return view('auth.register', $data);
    }

    public function authreg(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required','email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        Session::flash('hijau', 'Berhasil mendaftar, silahkan login!');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Session::flash('hijau', 'Anda berhasil mengakhiri sesi!');

        return redirect('/login');
    }
}
