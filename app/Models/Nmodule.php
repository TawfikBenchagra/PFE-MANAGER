<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nmodule extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','note','apogee', 'description'
    ];

}
