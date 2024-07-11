<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function result_perbandingan()
    {
        return view('user/perbandingan');
    }
}
