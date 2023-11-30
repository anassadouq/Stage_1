<?php

namespace App\Models;

use App\Models\Pov;
use App\Models\TypePrestation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suivi extends Model
{
    use HasFactory;
    protected $fillable=[
        'offre_commerciale',
        'montant',
        'id_type',
        'compte_rendu',
        'id_pov'    
    ];
    public function typePrestationModels()
    {
        return $this->hasMany(TypePrestation::class,'id');
    }

    public function povModels()
    {
        return $this->belongsTo(Pov::class,'id');
    }
}