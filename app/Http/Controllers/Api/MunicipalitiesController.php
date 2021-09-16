<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipalities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MunicipalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Municipalities::all();
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
     * @param  \App\Models\Municipalities  $municipalities
     * @return \Illuminate\Http\Response
     */
    public function show(Municipalities $municipalities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipalities  $municipalities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipalities $municipalities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipalities  $municipalities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipalities $municipalities)
    {
        //
    }
}
