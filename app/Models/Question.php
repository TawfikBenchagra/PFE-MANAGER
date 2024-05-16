<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'lib_question',
        'filiere',
        'module',
        'semestre',
    ];
 #   public function reponses()
#{
 #   return $this->hasMany(Reponse::class);
#}

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class, 'question_id', 'id');
    }
}
