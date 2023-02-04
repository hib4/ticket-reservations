<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public static function index()
    {
        return view('tickets.all', [
            'tickets' => Ticket::paginate(5)
        ]);
    }

    public static function show(Ticket $ticket)
    {
        return view('tickets.detail', [
            'ticket' => $ticket
        ]);
    }

    public static function create(Destination $destination)
    {
        return view('tickets.create', [
            'destination' => $destination,
        ]);
    }

    public static function store(Request $request)
    {
        $validateData = $request->validate([
            'destination_id'    => 'required',
            'full_name'         => 'required|max:255',
            'email'             => 'required',
            'phone_number'      => 'required',
            'nop'               => 'required',
            'reservation'       => 'required',
        ]);

        Ticket::create($validateData);
        return redirect('/tickets/all')->with('success', 'Hooray, successful booking tickets!');
    }

    public static function destroy(Ticket $ticket)
    {
        Ticket::destroy($ticket->id);
        return redirect('tickets/all')->with('success', 'Ticket has been deleted!');
    }

    public static function edit(Ticket $ticket)
    {
        return view('tickets.edit', [
            'ticket'       => $ticket,
        ]);
    }

    public static function update(Request $request, Ticket $ticket)
    {
        $validateData = $request->validate([
            'full_name'         => 'required',
            'email'             => 'required',
            'phone_number'      => 'required',
            'nop'               => 'required',
            'reservation'       => 'required',
        ]);

        Ticket::where('id', $ticket->id)->update($validateData);
        return redirect('/tickets/all')->with('success', 'Ticket has been updated');
    }
}
