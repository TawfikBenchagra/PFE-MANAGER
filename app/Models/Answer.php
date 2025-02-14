<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['lib_reponse', 'is_correct'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
