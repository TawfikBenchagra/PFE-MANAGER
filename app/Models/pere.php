<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class pere extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'cin',
        'apogee_etd',
        'password',
        'email',
        'image',
    ];

    protected $hidden = ['password'];

    public function etudiants(): HasOne
    {
        return $this->hasOne(etudiant::class, 'apogee', 'apogee_etd');
    }
}


