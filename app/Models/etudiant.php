<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class etudiant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    #protected $guard = 'etudiants';

    protected $fillable = [
        'nom',
        'prenom',
        'apogee',
        'date_naissance',
        'email',
        'sexe',
        'password',
        'filiere',
        'semestre',
        'image'
    ];

    protected $hidden = ['password'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    

    public function peres(): HasOne
    {
        return $this->hasOne(pere::class);
    }

    public function cours() {
        return $this->hasMany(cours::class, 'filiere', 'filiere');
    }

    public function parent()
    {
        return $this->belongsTo(pere::class, 'apogee_etd', 'apogee');
    }

    public function emploi()
    {
        return $this->hasOne(Emplois::class);
    }
}
