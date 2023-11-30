<?php

namespace App\Http\Controllers;
use App\Models\Client;
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

    public function update(Request $request, $id)
    {
        $client=client::find($id);
        $client->update($request->all());
        return $client;
    }

    public function search($name)
    {
        return Client::where ('name','like','%'.$name.'%')->get();
    }

    public function destroy($id)
    {
        return Client::destroy($id);
    }
}