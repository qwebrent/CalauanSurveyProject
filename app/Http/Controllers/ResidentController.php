<?php

namespace App\Http\Controllers;

use App\Barangay;
use App\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $resident = Resident::create([
            'unique_id' => $request->unique_id,
            'yearnow' => $request->yearnow,
            'image' => $request->image,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'job_status' => $request->jobstatus,
            'block' => $request->block,
            'lot' => $request->lot,
            'street' => $request->street,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'birthplace' => $request->birthplace,
            'birthday' => $request->b_day,
            'gender' => $request->gender,
            'civil_status' => $request->civstatus,
            'citizenship' => $request->citizenship,
            'email' => $request->email,
            'religion' => $request->religion,
            'height' => $request->height,
            'weight' => $request->weight,
            'blood_type' => $request->blood_type,
            'voters_id' => $request->voters_id,
            'contact_no' => $request->contact_no,
            'business_name' => $request->business_name,
            'monthly_income' => $request->monthly_income,
            'sfname' => $request->sfname,
            'smname' => $request->smname,
            'slname' => $request->slname,
            'sbirthday' => $request->sbirthday,
            'surveyor' => $request->surveyor
        ]);

        Barangay::where('id','=',$request->barangay)->increment('surveyed');

        return redirect()->route('addInfo.create', $resident->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident, $id)
    {
        $resident = Resident::where('id','=',$id)->first();
        return view('survey.resident-form.edit', compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resident = Resident::where('id','=',$id)->update([
            'unique_id' => $request->unique_id,
            'yearnow' => $request->yearnow,
            'image' => $request->image,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'job_status' => $request->jobstatus,
            'block' => $request->block,
            'lot' => $request->lot,
            'street' => $request->street,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'birthplace' => $request->birthplace,
            'birthday' => $request->b_day,
            'gender' => $request->gender,
            'civil_status' => $request->civstatus,
            'citizenship' => $request->citizenship,
            'email' => $request->email,
            'religion' => $request->religion,
            'height' => $request->height,
            'weight' => $request->weight,
            'blood_type' => $request->blood_type,
            'voters_id' => $request->voters_id,
            'contact_no' => $request->contact_no,
            'business_name' => $request->business_name,
            'monthly_income' => $request->monthly_income,
            'sfname' => $request->sfname,
            'smname' => $request->smname,
            'slname' => $request->slname,
            'sbirthday' => $request->sbirthday,
            'surveyor' => $request->surveyor
        ]);

        $resident = Resident::where('id','=',$id)->with('education')->first();
        if($resident->education == null){
            return redirect()->route('addInfo.create', $id);
        }else{
            return redirect()->route('addInfo.edit', $id);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        //
    }
}
