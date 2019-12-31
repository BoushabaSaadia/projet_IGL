<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['Nom', 'Prenom','Matricule','Niveau','Groupe'];
    
}
