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
        $type = Treatment_type::create([
            'type' => count(Treatment_type::all()->toArray()) + 1,
            'name' => $request->name
        ]);
        return response()->json([
            'msg' => 'Type created succesfully.',
            'data' => $type,
        ]);
    }

}
