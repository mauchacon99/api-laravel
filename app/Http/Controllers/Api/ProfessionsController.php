<?php

namespace App\Http\Controllers\Api;

use App\Models\Professions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Professions::all();
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
     * @param  \App\Models\Professions  $professions
     * @return \Illuminate\Http\Response
     */
    public function show(Professions $professions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professions  $professions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professions $professions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professions  $professions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professions $professions)
    {
        //
    }
}
