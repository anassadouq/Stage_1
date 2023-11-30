<?php

namespace App\Http\Controllers;
use App\Models\Appliance;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    public function index()
    {
        return Appliance::all();
    }

    public function store(Request $request)
    {
        return Appliance::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $appliance=Appliance::find($id);
        $appliance->update($request->all());
        return $appliance;
    }

    public function destroy($id)
    {
        return Appliance::destroy($id);
    }
}