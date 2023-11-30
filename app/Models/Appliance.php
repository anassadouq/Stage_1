<?php

namespace App\Models;

use App\Models\Pov;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appliance extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_type',
        'libelle',
        'dbid',
        'disponibilite',
        'references'
    ];
    
    public function typeModels()
    {
        return $this->hasMany(Type::class,'id');
    }

    public function povModels()
    {
        return $this->belongsTo(Pov::class,'id');
    }

}