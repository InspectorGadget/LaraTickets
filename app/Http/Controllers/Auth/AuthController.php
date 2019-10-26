<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function authenticateUser(Request $request)
    {
        dd($request->input());
    }

    public function authenticateAdmin(Request $request)
    {
        dd($request->input());
    }

    public function registerUser(Request $request)
    {
        dd($request->input());
    }
}
