<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!$validate) return back()->with('error', 'Please make sure all Input boxes are filled.');

        if (!(User::all()->where('email', '=', $request->input('email')))) return back()->with('error', 'User not found!');

        if (!(Auth::attempt(
            [
                'email' => trim(strtolower($request->input('email'))),
                'password' => trim($request->input('password'))
            ]
        ))) return back()->with('error', 'Invalid Credentials!');

        if (Auth::user()->isAdmin()) {
            return redirect(route('dashboard.admin'));
        } else {
            return redirect(route('dashboard.user'));
        }
    }

    public function registerUser(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validate) return back()->with('error', 'Please make sure all Input boxes are filled.');

        if (
            count(User::all()->where('email', '=', strtolower($request->input('email')))) > 0
            ||
            count(User::all()->where('username', '=', strtolower($request->input('username')))) > 0
        ) return back()->with('error', 'User exists!');

        $user = new User();
        $user->email = trim(strtolower($request->input('email')));
        $user->username = strtolower($request->input('username'));
        $user->password = Hash::make(trim($request->input('password')));
        $user->save();

        return !$user
            ? back()->with('error', 'Unable to sign you up!')
            : redirect(route('login'))->with('message', 'Please login with your new account to validate your account');
    }
}
