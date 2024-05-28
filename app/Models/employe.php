<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
    protected $fillable=[
            'id',
            'nom',
            'username',	
            'email',	
            'password',	
            'id_admin',	
            'created_at',	
            'updated_at',	
            'service'
    ];
}
