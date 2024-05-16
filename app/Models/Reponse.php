<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;
    protected $fillable = [
        'lib_reponse', 
        'question_id',
        'is_correct',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    
}
