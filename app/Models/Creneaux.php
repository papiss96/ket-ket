<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creneaux extends Model
{
    use HasFactory;
    protected $fillable = [
            'id_terrain',
            'dateDebut',
            'dateFin',
            'statut'
    ];
}
