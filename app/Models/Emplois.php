<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplois extends Model
{
    use HasFactory;

    protected $fillable = [
        'Jour',
        'Seance1',
        'Seance2',
        'Seance3',
        'Seance4',
        'Seance5',
        'filiere',
        'semester',
    ];
    
    public function etudiant()
    {
        return $this->belongsTo(etudiant::class, 'filiere', 'filiere')
            ->where('semestre', $this->semestre);
    }
    
    public function etudiants()
    {
        return $this->hasMany(etudiant::class);
    }
}
