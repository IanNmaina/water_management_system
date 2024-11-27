<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\WaterBill;
use Illuminate\Http\Request;

class WaterBillController extends Controller
{
    // Display a list of all billings
    public function index()
    {
        $bills = WaterBill::with('client')->get();
        return view('bills.index', compact('bills'));
    }

    // Show form to add a new billing
    public function create()
    {
        $clients = Client::all();
        return view('bills.create', compact('clients'));
    }

    // Store a new billing
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'current_reading' => 'required|numeric',
            'rate' => 'required|numeric',
        ]);

        $client = Client::find($request->client_id);
        $amount_due = ($request->current_reading - $client->first_reading) * $request->rate;

        $bill = WaterBill::create([
            'client_id' => $request->client_id,
            'current_reading' => $request->current_reading,
            'rate' => $request->rate,
            'amount_due' => $amount_due,
            'billing_date' => now(),
        ]);

        return redirect()->route('bills.show', $bill->id)->with('success', 'Billing created successfully.');
    }

    // Show invoice details for a specific billing
    public function show($id)
    {
        $bill = WaterBill::with('client')->findOrFail($id);
        return view('bills.invoice', compact('bill'));
    }

    // Delete a billing
    public function destroy($id)
    {
        WaterBill::findOrFail($id)->delete();
        return redirect()->route('bills.index')->with('success', 'Billing deleted successfully.');
    }
}
