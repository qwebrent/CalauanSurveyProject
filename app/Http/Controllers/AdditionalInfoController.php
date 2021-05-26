<?php

namespace App\Http\Controllers;

use App\Resident;
use App\Household;
use App\WorkExperience;
use Illuminate\Http\Request;
use App\EducationalAttainment;

class AdditionalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('survey.additional-info-form.create')->with($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $resident = Resident::where('id','=',$id)->first();

        EducationalAttainment::create([
            'school_name' => $request->school_name,
            'school_address' => $request->school_address,
            'course' => $request->course,
            'level' => $request->level,
            'school_year' => $request->school_year,
            'res_id' => $resident->unique_id
        ]);

        $experiences = [];

        foreach ($request->job_type as $item => $key) {
            $experiences[] = ([
                'job_type' => $request->job_type[$item],
                'position' => $request->position[$item],
                'year_from' => $request->year_from[$item],
                'year_to' => $request->year_to[$item],
                'res_id' => $resident->unique_id
            ]);
        }

        WorkExperience::insert($experiences);

        Household::create([
            'yearnow' => $request->yearnow,
            'owner' => $request->owner,
            'lot' => $request->lot,
            'street' => $request->street,
            'purok' => $request->purok,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'date_reg' => $request->date_reg,
            'res_id' => $resident->unique_id
        ]);

        return redirect()->route('relative.create', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Resident::where('id','=',$id)->with('education', 'experiences', 'household')->first();
        return view('survey.additional-info-form.edit', compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resident = Resident::where('id','=',$id)->first();

        EducationalAttainment::where('res_id','=',$resident->unique_id)->update([
            'school_name' => $request->school_name,
            'school_address' => $request->school_address,
            'course' => $request->course,
            'level' => $request->level,
            'school_year' => $request->school_year,
            'res_id' => $resident->unique_id
        ]);

        WorkExperience::where('res_id','=',$resident->unique_id)->delete();

        $experiences = [];

        foreach ($request->job_type as $item => $key) {
            $experiences[] = ([
                'job_type' => $request->job_type[$item],
                'position' => $request->position[$item],
                'year_from' => $request->year_from[$item],
                'year_to' => $request->year_to[$item],
                'res_id' => $resident->unique_id
            ]);
        }

        WorkExperience::insert($experiences);

        
        Household::where('res_id','=',$resident->unique_id)->update([
            'yearnow' => $request->yearnow,
            'owner' => $request->owner,
            'lot' => $request->lot,
            'street' => $request->street,
            'purok' => $request->purok,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'date_reg' => $request->date_reg,
            'res_id' => $resident->unique_id
        ]);

        $resident = Resident::where('id','=',$id)->with('relatives')->first();
        if($resident->education == null){
            return redirect()->route('relative.create', $id);
        }else{
            return redirect()->route('relative.edit', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
