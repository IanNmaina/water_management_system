<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'meter_number' => 'required|numeric|unique:clients,meter_number',
            'first_reading' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        Client::create($validated);

        return redirect()->route('clients.create')->with('success', 'Client added successfully!');
    }
}


