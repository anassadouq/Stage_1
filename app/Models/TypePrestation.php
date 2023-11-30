<?php

namespace App\Models;

use App\Models\Suivi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypePrestation extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelle'
    ];
    
    public function suivis(){
        return $this->belongsTo(Suivi::class,'id');
    }
}