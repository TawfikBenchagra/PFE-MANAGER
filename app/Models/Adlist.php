<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','description'
    ];
}
