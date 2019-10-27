<?php

namespace App\Http\Controllers\Ticket;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{

    public function create(Request $request) {
        $validate = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'message' => 'required'
        ]);

        if (!$validate) return back()->with('error', 'Please fill all the fields!');

        $ticket = new Ticket();
        $ticket->email = auth()->user()->email;
        $ticket->category_id = trim($request->input('category'));
        $ticket->title = trim($request->input('title'));
        $ticket->status = 1; // 1 = Open
        $ticket->message = trim($request->input('message'));
        $ticket->save();

        return $ticket
            ? back()->with('message', 'Ticket created!')
            : back()->with('error', 'Unable to create Ticket');
    }

}
