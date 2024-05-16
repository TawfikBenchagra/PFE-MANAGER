<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elist extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','sexe','module', 'description'
    ];

}
