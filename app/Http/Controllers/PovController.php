<?php

namespace App\Http\Controllers;
use App\Models\Pov;
use Illuminate\Http\Request;

class PovController extends Controller
{
    public function index()
    {
        return Pov::all();
    }

    public function store(Request $request)
    {
        return Pov::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $pov=Pov::find($id);
        $pov->update($request->all());
        return $pov;    
    }

    public function destroy($id)
    {
        return Pov::destroy($id);
    }
}