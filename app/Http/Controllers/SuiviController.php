<?php

namespace App\Http\Controllers;
use App\Models\Suivi;
use Illuminate\Http\Request;

class SuiviController extends Controller
{
    public function index()
    {
        return Suivi::all();
    }

    public function store(Request $request)
    {
        return Suivi::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product=Suivi::find($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id)
    {
        return Suivi::destroy($id);
    }
}