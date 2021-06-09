<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
  
   protected $guarded = []; //l tous les champs acceptes mass asseigment #
   
    public function dépots()
    {

        return $this->hasMany('App\Dépot');
    }



   public function projets()
    {

      return $this->belongsToMany('App\Projet');
      
    }

    public function equipes()
    {

      return $this->belongsToMany('App\Equipe');

    }
}
