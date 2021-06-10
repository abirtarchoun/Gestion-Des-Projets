<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
  protected $guarded = []; //l tous les champs acceptes mass asseigment #
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
