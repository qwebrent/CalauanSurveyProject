<?php

namespace App\Http\Controllers;
use App\Barangay;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $barangays = Barangay::all();
        return view('dashboard', compact('barangays'));
    }
}
