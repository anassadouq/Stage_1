<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appliance;

class Type extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelle'
    ];
    public function appliances()
    {
        return $this->belongsTo(Appliance::class,'id');
    }
}