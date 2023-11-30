<?php

namespace App\Http\Controllers;
use App\Models\suivi;
use App\Models\typePrestation;
use App\Models\pov;


use Illuminate\Http\Request;

class SuiviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return suivi::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return suivi::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=suivi::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return suivi::destroy($id);
    }

    public function searchTypePrestation($id){
        $type=suivi::find($id)->typePrestationModels;
        return $type;
    }

    public function searchPov($id){
        $type=suivi::find($id)->povModels;
        return $type;
    }


}
