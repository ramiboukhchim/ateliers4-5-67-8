<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class, 'classes_id');
    }
}
