<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PovController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SceanceController;
use App\Http\Controllers\ApplianceController;
use App\Http\Controllers\TypePrestationController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('client', ClientController::class);
Route::resource('contact', ClientController::class);
Route::get('clientContact/{id}',[ClientController::class,'searchClient']);
Route::resource('type', TypeController::class);
Route::resource('pov', PovController::class);
Route::get('appliances/{id}',[PovController::class,'searchAppliance']);
Route::get('clients/{id}',[PovController::class,'searchClient']);
Route::resource('sceance', SceanceController::class);
Route::get('povSceance/{id}',[SceanceController::class,'searchPov']);
Route::resource('suivi', SuiviController::class);
Route::get('typePrestation/{id}',[SuiviController::class,'searchTypePrestation']);
Route::get('povSuivi/{id}',[SuiviController::class,'searchPov']);
Route::resource('type_prestation', TypePrestationController::class);
Route::resource('appliance', ApplianceController::class);
Route::get('types/{id}',[ApplianceController::class,'searchType']);