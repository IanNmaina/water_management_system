<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Example data for display, replace with dynamic data as needed
        $categoriesCount = 2;
        $totalClients = 2;
        $pendingBills = 1;

        return view('dashboard', compact('categoriesCount', 'totalClients', 'pendingBills'));
    }
}
