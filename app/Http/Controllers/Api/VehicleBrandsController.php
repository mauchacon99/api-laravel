<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VehicleBrands;
use Illuminate\Http\Request;

class VehicleBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VehicleBrands::all();
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
     * @param  \App\Models\VehicleBrands  $vehicleBrands
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleBrands $vehicleBrands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleBrands  $vehicleBrands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleBrands $vehicleBrands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleBrands  $vehicleBrands
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleBrands $vehicleBrands)
    {
        //
    }
}
