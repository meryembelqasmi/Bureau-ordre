<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrant extends Model
{
    use HasFactory;
    protected $fillable=[
       'reference',
      'date_recu',
      'analyse',
       'nom_entreprise',
       'code',
       'service_concerne',
       'type_de_courrier',
       'active',
       'id_notification',
       
    ];
}
