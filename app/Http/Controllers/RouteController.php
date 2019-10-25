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
        return response()->json([
           'data' => 'Hello User Login'
        ]);
    }

    public function showAdminLogin() {
        return response()->json([
            'data' => 'Hello Admin Login'
        ]);
    }

}
