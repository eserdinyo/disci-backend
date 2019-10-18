<?php

namespace App\Http\Controllers;

use App\Treatment_type;
use Illuminate\Http\Request;

class TreatmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Treatment_type::all();
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Treatment_type  $treatment_type
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment_type $treatment_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Treatment_type  $treatment_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment_type $treatment_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Treatment_type  $treatment_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment_type $treatment_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treatment_type  $treatment_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment_type $treatment_type)
    {
        //
    }
}
