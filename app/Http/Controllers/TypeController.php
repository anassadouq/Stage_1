<?php

namespace App\Http\Controllers;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return Type::all();
    }

    public function store(Request $request)
    {
        return Type::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $type=Type::find($id);
        $type->update($request->all());
        return $type;
    }

    public function destroy($id)
    {
        return Type::destroy($id);
    }
}