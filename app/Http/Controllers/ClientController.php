<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\pov;
use App\Models\contact;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function store(Request $request)
    {
        return Client::create($request->all());
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $client=client::find($id);
        $client->update($request->all());
        return $client;
    }

    public function destroy($id)
    {
        return client::destroy($id);
    }

    public function search($name)
    {
        return client::where ('name','like','%'.$name.'%')->get();
    }

    public function searchPov($id){
        $type=client::find($id)->povModels;
        return $type;
    }
}