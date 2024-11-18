<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

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
        return redirect()->route('clients.index')->with('success', 'Client added successfully!');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'meter_number' => 'required|numeric|unique:clients,meter_number,' . $id,
            'first_reading' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        $client = Client::findOrFail($id);
        $client->update($validated);
        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
    }
}

