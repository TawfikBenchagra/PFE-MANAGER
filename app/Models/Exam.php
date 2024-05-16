<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'filiere',
        'matiere',
        'section',
        'semestre',
        'Professeur',
        'Heure_début',
        'Heure_fin',
    ];
}
