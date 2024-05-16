<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblio extends Model
{
    use HasFactory;
    protected $fillable = [
        'Type',
        'Titre',
        'Contenu',
        'filiere',
        'semestre',
        'module',
    ];
}
