<?php

namespace App\Models;
use App\Models\Tarif;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    public function parcelles()
    {
        return $this->belongsToMany(Parcelle::class, 'interventions', 'Inr_Par_Id')->using(Intervention::class);
    }
    public function tarifs(){
        return $this->hasMany(Tarif::class);
    }
}
