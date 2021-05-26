<?php

namespace App\Http\Controllers;

use App\Resident;
use Illuminate\Http\Request;


class SurveyController extends Controller
{
    public function create(){

        return view('survey.resident-form.create');
    }

    public function residents(){

        $resident = Resident::with('education', 'experiences', 'household', 'relatives')->get();
        return view('residents.residents');

    }
}
