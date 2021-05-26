<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangay;

class SurveyController extends Controller
{
    public function create(){

        $barangays = Barangay::get();
        return view('survey.resident', compact('barangays'));
    }
}
