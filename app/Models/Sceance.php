<?php

namespace App\Models;

use App\Models\Pov;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sceance extends Model
{
    use HasFactory;
    protected $fillable=[
        'date_sceance',
        'resumer',
        'participant',
        'id_pov'
    ];
    public function povModels()
    {
        return $this->belongsTo(Pov::class,'id');
    }
}
