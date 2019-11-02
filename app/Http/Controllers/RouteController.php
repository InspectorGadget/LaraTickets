<?php

namespace App\Http\Controllers;

use App\Ticket;

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

    public function viewTicket($id) {
        $data = Ticket::all()->find($id);
        if (!$data) return redirect(route('dashboard.user'))->with('error', 'Ticket not found');
        if ($data->email !== auth()->user()->email) return redirect(route('dashboard.user'))->with('error', 'No permission to view this Ticket');

        return view('user.view', ['data' => Ticket::all()->find($id)]);
    }

    public function showNewTicketForm() {
        return view('user.new');
    }

    public function showAdminDashboard()
    {
        return view('admin.index');
    }

}
