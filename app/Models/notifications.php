<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'nom_entreprise',
        'date_recu',
        'analyse',
        'active',
        'code',
        'service_concerne',
        'type_de_courrier',
    ];
}
