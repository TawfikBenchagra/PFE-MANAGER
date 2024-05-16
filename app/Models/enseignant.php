<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class enseignant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    #protected $table = 'enseignants';

    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'email',
        'sexe',
        'password',
        'image',
    ];

    protected $hidden = ['password'];
}
