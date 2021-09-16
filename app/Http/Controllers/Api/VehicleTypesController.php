<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VehicleTypes;
use Illuminate\Http\Request;

class VehicleTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VehicleTypes::all();
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
     * @param  \App\Models\VehicleTypes  $vehicleTypes
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleTypes $vehicleTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleTypes  $vehicleTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleTypes $vehicleTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleTypes  $vehicleTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleTypes $vehicleTypes)
    {
        //
    }
}
