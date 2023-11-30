<?php

namespace App\Models;

use App\Models\Suivi;
use App\Models\Client;
use App\Models\Sceance;
use App\Models\Appliance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pov extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_appliance',
        'id_client',
        'date_debut',
        'date_fin',
        'description',
        'compte_manager',
        'ingenieur_cybersecurite',
        'analyse_cybersecurite',
        'libelle'
    ];
    public function applianceModels()
    {
        return $this->hasMany(Appliance::class,'id');
    }

    public function clientModels()
    {
        return $this->hasMany(Client::class,'id');
    }

    public function suiviModels()
    {
        return $this->hasMany(Suivi::class,'id');
    }

    public function sceanceModels()
    {
        return $this->hasMany(Sceance::class,'id');
    }

}