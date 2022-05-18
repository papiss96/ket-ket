<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileMoney extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_envoie',
        'numero_reception'
    ];
}
