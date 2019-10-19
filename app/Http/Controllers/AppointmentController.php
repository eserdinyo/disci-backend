<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use App\Patient;
use App\Treatment_type;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Appointment::all();
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
        $request->validate([
            'treatment_tip'          => 'required',
            'start_date'             => 'required',
            'finish_date'            => 'required',
            'doctor_id'              => 'required',
            'patient_id'             => 'required',
        ]);



        $doctor = Doctor::findOrFail($request->doctor_id);
        $patient = Patient::findOrFail($request->patient_id);
        $treatment_type =  Treatment_type::findOrFail($request->treatment_tip);
        $title = $patient->name . " " . $patient->surname . " - " . $treatment_type->name . " - Dr. " . $doctor->name . " " . $doctor->surname;

        $appointment = Appointment::create([
            'start' => $request->start_date,
            'end' => $request->finish_date,
            'title' => $title,
            'class' => 'type_' . $treatment_type->type
        ]);



        return $appointment;
        /* return response()->json([
            'msg' => 'Appointment created succesfully.',
            'data' => $res_appointment,
        ]); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
