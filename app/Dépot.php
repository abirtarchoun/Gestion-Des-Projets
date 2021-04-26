<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dépot extends Model
{
    public function enseignants()
    {
        return $this->hasMany('App\Enseignant');
    }

    public function etudiants()
    {
        return $this->hasMany('App\Etudiant');
    }
}
