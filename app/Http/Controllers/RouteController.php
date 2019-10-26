<?php

namespace App\Http\Controllers;

class RouteController extends Controller
{

    public function showLanding() {
        return response()->json([
           'data' => 'Hi'
        ]);
    }

    public function showUserLogin() {
        return view('login.index');
    }

    public function showUserRegister() {
        return view('register.index');
    }

    public function showAdminLogin() {
        return view('login.admin');
    }

    public function showMyTickets() {
        return view('user.index');
    }

    public function showAdminDashboard()
    {
        return view('admin.index');
    }

}
