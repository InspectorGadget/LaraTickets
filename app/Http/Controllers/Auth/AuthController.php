<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function loginAsUser(Request $request)
    {
        dd($request->input());
    }
}
