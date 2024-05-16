<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plist extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','apogee', 'description'
    ];
}
