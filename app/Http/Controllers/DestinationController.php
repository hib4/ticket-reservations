<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public static function index()
    {
        return view('destinations.all', [
            'destinations' => Destination::paginate(8),
        ]);
    }

    public static function show(Destination $destination)
    {
        return view('destinations.detail', [
            'destination' => $destination
        ]);
    }
}
