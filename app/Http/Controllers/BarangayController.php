<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangay;

class BarangayController extends Controller
{
    public function index()
    {
        $barangays = Barangay::all();
        return view('dashboard', compact('barangays'));
    }
}
