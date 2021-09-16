<?php

namespace App\Http\Controllers\Api;

use App\Models\Peoples;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\{PeoplesCollection, ShowPeoplesResources};
use App\Http\Requests\CreateOrUpdatePeoplesRequest;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  PeoplesCollection::collection(Peoples::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrUpdatePeoplesRequest $request)
    {
        return $request->createdOrUdpate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peoples  $peoples
     * @return \Illuminate\Http\Response
     */
    public function show(Peoples $peoples, $id)
    {
       return  new ShowPeoplesResources(Peoples::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peoples  $peoples
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peoples $peoples)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peoples  $peoples
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peoples $peoples, $id)
    {    
        
        $peoples = Peoples::find($id);
        $peoples->delete();
    }
}
