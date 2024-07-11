<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function index()// Fungsi untuk mengambil data admin di dalam database
    {
        $admins = Admin::all();

        return view('admin/tableadmin', compact('admins'));
    }
}
