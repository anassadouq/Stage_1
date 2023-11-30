<?php

namespace App\Http\Controllers;
use App\Models\Sceance;
use Illuminate\Http\Request;

class SceanceController extends Controller
{
    public function index()
    {
        return Sceance::all();
    }

    public function store(Request $request)
    {
        return Sceance::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product=Sceance::find($id);
        $product->update($request->all());
        return $product;    
    }

    public function destroy($id)
    {
        return Sceance::destroy($id);
    }
}