<?php

namespace App\Models;

use App\Models\Pov;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelle',
        'secteur',
        'active'
    ];

    public function povModels()
    {
        return $this->belongsTo(Pov::class,'id');
    }

    public function contactModels()
    {
        return $this->belongsTo(Contact::class,'id');
    }
}