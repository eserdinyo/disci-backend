<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use App\Treatment_type;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return Patient::all();
        $users = Patient::with('treatment')->get();

        $fisrtName = $request->has('first_name') ? $request->get('first_name') : null;

        if($fisrtName) {
            $users = Patient::with('treatment')->where('name','like',$fisrtName.'%')->get();
        }

        return $users;
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
    public function store(Request $request)
    {
        //
    }

    public function show(Patient $patient)
    {
        $treatments =  $patient->treatment()->get();
        foreach ($treatments as $treatment) {
            $treatment->doctor_id = Doctor::find($treatment->doctor_id);
            $treatment->treatment_type_id = Treatment_type::find($treatment->treatment_type_id);
        }

        return [
            'patient' => $patient,
            'treatments' => $treatments
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
