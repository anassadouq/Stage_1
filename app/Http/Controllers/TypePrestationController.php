<?php

namespace App\Http\Controllers;
use App\Models\TypePrestation;
use Illuminate\Http\Request;

class TypePrestationController extends Controller
{
    public function index()
    {
        return TypePrestation::all();
    }

    public function store(Request $request)
    {
        return TypePrestation::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $pov=TypePrestation::find($id);
        $pov->update($request->all());
        return $pov;
    }

    public function destroy($id)
    {
        return TypePrestation::destroy($id);
    }
}