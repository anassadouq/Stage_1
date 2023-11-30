<?php

namespace App\Http\Controllers;
use App\Models\contact;
use App\Models\Client;
use App\Models\pov;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
       return contact::all();
    }

    public function store(Request $request)
    {
        return contact::create($request->all());
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $contact=contact::find($id);
        $contact->update($request->all());
        return $contact;
    }

    public function destroy($id)
    {
        return contact::destroy($id);
    }

    public function searchClient($id){
        $type=contact::find($id)->clientModels;
        return $type;
    }
}