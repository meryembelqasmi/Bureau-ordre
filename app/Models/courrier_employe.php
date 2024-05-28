<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courrier_employe extends Model
{
    use HasFactory;
    protected $fillable=[
        'reference'	,
        'daterecu'	,
        'analyse'	,
        'code'	,
        'type_courrier'	,
        'activ'	,
        'service'	,
        'id_entrant'	,
        'id_employe',
    ];
}
