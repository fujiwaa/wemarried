<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ])->validate();

        UserModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke halaman login setelah berhasil registrasi
        Session::flash('success', 'Register sukses! Silahkan login.');
        return redirect()->route('login');
    }

    public function login()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Jika berhasil login, redirect ke halaman yang sesuai
            return redirect()->intended('/dashboard');
        } else {
            // Jika gagal login, kembali ke halaman login dengan pesan error
            Session::flash('error', 'Email atau password anda salah!');
            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('login');
    }
}
