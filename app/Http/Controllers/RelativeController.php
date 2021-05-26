<?php

namespace App\Http\Controllers;

use App\Relative;
use App\Resident;
use Illuminate\Http\Request;

class RelativeController extends Controller
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
        return view('survey.family-member-form.create')->with($id);
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
        $relatives = [];

        foreach ($request->full_name as $item => $key) {
            $relatives[] = ([
                'full_name' => $request->full_name[$item],
                'birthday' => $request->birthday[$item],
                'relationship' => $request->relationship[$item],
                'res_id' => $resident->unique_id,
            ]);
        }

        Relative::insert($relatives);

        return redirect()->route('residents');
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
        $resident = Resident::where('id','=',$id)->with('relatives')->first();
        return view('survey.family-member-form.edit', compact('resident'));
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

        Relative::where('res_id','=',$resident->unique_id)->delete();

        $relatives = [];

        foreach ($request->full_name as $item => $key) {
            $relatives[] = ([
                'full_name' => $request->full_name[$item],
                'birthday' => $request->birthday[$item],
                'relationship' => $request->relationship[$item],
                'res_id' => $resident->unique_id,
            ]);
        }

        Relative::insert($relatives);

        return redirect()->route('residents');
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
