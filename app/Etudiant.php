<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function dépot()
    {

        return $this->belongsTo('App\Dépot');
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
