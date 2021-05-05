<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
  public function equipes()
  {
      return $this->hasMany('App\Equipe');
  }
    public function etudiants()
    {

      return $this->belongsToMany('App\Etudiant');
    }

    
    public function depots()
    {

      return $this->hasMany('App\Dépot');
    }

}
