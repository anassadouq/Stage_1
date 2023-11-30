<?php

namespace App\Http\Controllers;
use App\Models\pov;
use App\Models\appliance;
use App\Models\Client;


use Illuminate\Http\Request;

class PovController extends Controller
{
    public function index()
    {
        return pov::all();
    }

    public function store(Request $request)
    {
        return pov::create($request->all());
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $pov=pov::find($id);
        $pov->update($request->all());
        return $pov;    
    }

    public function destroy($id)
    {
        return pov::destroy($id);
    }

    public function searchAppliance($id){
        $type=pov::find($id)->applianceModels;
        return $type;
    }

    public function searchClient($id){
        $type=pov::find($id)->clientModels;
        return $type;
    }
}