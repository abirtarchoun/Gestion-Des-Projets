<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }



    public function etudiants()
    {

      return $this->belongsToMany('App\Etudiant','etudiant_projet');
    }
}
