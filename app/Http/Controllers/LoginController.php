<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function login() // Fungsi untuk kehalaman login
    {
        return view('admin/login');
    }

    public function login_proses(Request $request) // Fungsi untuk login
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');


        if (Auth::guard('admin')->attempt($credentials)) {
            // Jika Login Berhasil
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['Email dan Password salah']);
        }
    }


    public function logout() // Fungsi untuk logout
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }


    public function login_user()
    {
        return view('user/login');
    }
    public function login_proses_user(Request $request) // Fungsi untuk login user
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');


        if (Auth::guard('user')->attempt($credentials)) {
            // Jika Login user Berhasil
            return redirect()->route('user.result');
        } else {
            return redirect()->back()->withErrors(['Email dan Password salah']);
        }
    }


    public function logout_user() // Fungsi untuk logout
    {
        Auth::guard('user')->logout();
        return redirect()->route('login-user');
    }
}
