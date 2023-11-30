<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
       return Contact::all();
    }

    public function store(Request $request)
    {
        return Contact::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $contact=Contact::find($id);
        $contact->update($request->all());
        return $contact;
    }

    public function searchClient($id){
        $type=Contact::find($id)->clientModels;
        return $type;
    }

    public function destroy($id)
    {
        return Contact::destroy($id);
    }
}