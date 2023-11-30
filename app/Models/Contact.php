<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\firstModel;

class contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'prenom',
        'telephone',
        'fonction',
        'id_client',
        'email'
    ];
    public function clientModels()
    {
        return $this->hasMany(Client::class,'id');
    }
}