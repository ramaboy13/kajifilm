<?php

namespace App\Http\Controllers;

use App\Models\FilmModel;
use Illuminate\Http\Request;
use App\Models\User; // Perbaikan di sini
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function result_perbandingan()
    {
        return view('user/perbandingan');
    }
    public function home(Request $request)
    {
        $category = $request->input('kategori');
        $search = $request->input('search');
        $query = FilmModel::query();

        if ($category) {
            $query->where('kategori', $category);
        }

        if ($search) {
            $query->where('judul', 'LIKE', "%{$search}%");
        }

        $films = $query->paginate(10);

        if (Auth::guard('user')->check()) {
            // Jika user terautentikasi
            $user = Auth::guard('user')->user();
            // Mendapatkan pengguna yang terautentikasi

            return view('user.home', compact('films', 'user'));
        } else {
            // Jika tidak terautentikasi, redirect ke halaman login
            return redirect()->route('login-user');
        }
    }



    public function register()
    {
        return view('user/form_register');
    }

    public function proses_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login-user')->with('success', 'Anda berhasil register silahkan login kembali');
    }
}
